<?php
  error_reporting(0);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $sitecss; ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php //echo $navbar; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Brand Logo -->
      <?php echo $brandlogo; ?>
      <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php echo $adminuserpanel; ?>
        <!-- Sidebar user panel (optional) -->
        <!-- SidebarSearch Form -->
        <?php echo $sitesearch; ?>
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <?php echo $contributormenu; ?>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Make Contribution</h1>
          </div>
        <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default" style="width:60%;">
          <!-- /.card-header -->
          <form name="frmobj" id="frmobj">
            <input type="hidden" name="recordid" id="recordid">
            <input type="hidden" name="updatestatus" id="updatestatus">
            <input type="hidden" id="hdate1">
            <div class="card-body">
              <div class="row"> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" id="emailaddress" name="emailaddress" readonly="true">
                  </div>                  
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" readonly="true">
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" id="phoneno" name="phoneno" readonly="true">
                  </div>
                  <div class="form-group">
                    <label>Contribution Category</label>
                    <input type="text" class="form-control" id="ctype" name="ctype" readonly="true">
                  </div>     
                  <div class="form-group">
                    <label>Batch/Group</label>
                    <input type="text" class="form-control" id="batch" name="batch" style='text-align: center;' readonly="true">
                  </div>                                  
                </div>   
                <div class="col-md-6">
                  <div class="form-group">
                    <img id='imgprvw' style='top:15%;width:50%; height:150px' src=''>
                  </div>

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <hr>
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">PAYMENT & PAYMENT HISTORY</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                  <div class="col-md-3">
                    <label style="width: 200%;"><span style="color: #996600;"><u>PAYMENT INFORMATION</u></span></label>
                    <div class="form-group">
                      <label>Current Year</label>
                      <input type="text" class="form-control" id="accountingyear" name="accountingyear" readonly="true;" value="<?php echo $_SESSION['accountingyear']; ?>">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Transaction Date</label>
                        <input type="text" class="form-control" id="transactiondate" name="transactiondate" readonly="true;">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Payment Mode</label>
                      <select class="form-control" id="category" name="category">
                        <option value="Bank Deposit">Bank Deposit</option>
                        <option value="Online Transfer">Online Transfer</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Account No (2000452314) </label>
                      <input type="text" class="form-control" id="accountno" name="accountno" onkeyup="fetchaccountnumber();">
                    </div>  
                    <div class="form-group" style="width: 200%;">
                      <label>Bank</label>
                      <input type="text" class="form-control" id="bank" name="bank" readonly="true">
                    </div>  
                    <div class="form-group" style="width: 200%;">
                      <label>Account Name</label>
                      <input type="text" class="form-control" id="accountname" name="accountname" readonly="true"> 
                    </div>  

                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-block" id="btnupdate">Save/Submit</button>
                    </div>    

                  </div>
                  <div class="col-md-3">
                    <label><span style="color: white;"><u>P</u></span></label>
                    <div class="form-group">
                        <label>Select Month</label>
                        <select class="form-control" id="accountingmonthid" name="accountingmonthid" onchange="fetchcollector();">
                          <option value="0"></option>
                          <option value="1">JANUARY</option>
                          <option value="2">FEBRUARY</option>
                          <option value="3">MARCH</option>
                          <option value="4">APRIL</option>
                          <option value="5">MAY</option>
                          <option value="6">JUNE</option>
                          <option value="7">JULY</option>
                          <option value="8">AUGUST</option>
                          <option value="9">SEPTEMBER</option>
                          <option value="10">OCTOBER</option>
                          <option value="11">NOVEMBER</option>
                          <option value="12">DECEMBER</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Amount ($)</label>
                        <input type="text" class="form-control" id="amount" name="amount" readonly="true">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Payment Reference No.</label>
                      <input type="text" class="form-control" id="referenceno" name="referenceno">
                    </div>
                  </div>

                  <!-- /.col -->
                  <div class="col-md-6">
                    <label><span style="color: red;" id="collector"><u></u></span></label>
                    <div class="form-group">
                      <label><span style="color: #996600;"><u>PAYMENT HISTORY FOR THE ACCOUNTING YEAR</u></span></label>
                      <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th style='width:8%;'>#</th>
                          <th>Month</th>
                          <th style='width:35%; text-align: center;'>Amount ($)</th>
                        </tr>
                        </thead>
                        <tbody id="tbdata">
                        </tbody>
                      </table>  
                      <p style="float: right;">
                        <span style="color:  #996600;"><b>TOTAL CONTRIBUTION:</b></span>($)<span id="contotal" style="padding-left: 5px;"></span>
                      </p>
                    </div>
                    <!-- /.form-group -->
                  </div>

                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
            </div>
            <!-- END OF EXPERIMENT -->
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     <?php echo $modalsection; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <?php echo $sitefooter; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php echo $sitescript; ?>
</body>
<script>
  onload = initializer();

  function initializer(){
    getprofileinfo();
    $("#modalsetup").hide();
    $("#modalcontent").css('visibility', 'visible');   
  
  }

  function showimagepreview(input){
    if (input.files && input.files[0]){
        var filerdr = new FileReader();
        filerdr.onload = function(e) {
            $('#imgprvw').attr('src', e.target.result);
        }
        filerdr.readAsDataURL(input.files[0]);
    }
    window.scrollTo(0,0); 
  }

  function reformatdate(){
    var getdate     = $("#hdate1").val().trim();   
    if (getdate!=""){
      var fetchday    =   getdate.substr(3,2);
      var fetchmonth  =   getdate.substr(0,2);
      var fetchyear   =   getdate.substr(6,4);
      var formatdate  =   fetchday+"/"+fetchmonth+"/"+fetchyear;  
      $("#transactiondate").val(formatdate);  
    }
  }


  $(document).ready(function(){

    bsCustomFileInput.init();

    /* Validate batch number*/
    $("#amount").on("keypress keyup paste", function(e) {
        this.value = this.value.replace(/[^0-9.]/g, '');
    })  


    $("#transactiondate").click(function(){   
      $("#transactiondate" ).datepicker();
      $("#transactiondate" ).datepicker("show");
    });


    $("#btnupdate").click(function(){
        var emailaddress    =   $("#emailaddress").val().trim();
        var transactiondate =   $("#transactiondate").val().trim();
        var amount          =   $("#amount").val().trim();
        var referenceno     =   $("#referenceno").val().trim();
        var bank            =   $("#bank").val().trim();
        var accountname     =   $("#accountname").val().trim();
        var accountno       =   $("#accountno").val().trim();
        if (emailaddress==''||transactiondate==''||amount==''||referenceno==''||bank==''||accountname==''||accountno==''){
          $("#dmodaltext").text('One or more important fields are empty');
          $('#dmodalbtn').trigger("click");             
        }else{
          var formdata = $("form").serialize();
          $.post("<?php echo site_url('/contributors/updatecontribution'); ?>",formdata).done(function(data){
            if (data==-2){
              $("#dmodaltext").text('Sorry! You have not paid for previous month');
              $('#dmodalbtn').trigger("click"); 
            }else if(data==-1){
              $("#dmodaltext").text('Duplicate transaction not allowed! You have already paid for the selected month');
              $('#dmodalbtn').trigger("click"); 
            }else if(data==1){
              fetchpaymenthistory();
              $("#xmodaltext").text('Transaction Successful');
              $('#xmodalbtn').trigger("click"); 
            }else{
              alert(data);
            }
          }); 
        }
    });
  });

  // Fetch contributor's info
  // ------------------------
  function getprofileinfo(){
    $.getJSON("<?php echo site_url('/contributors/getprofileinfox'); ?>",function(data){
      if (data!=0){
        $("#fullname").val(data.fullname);
        $("#emailaddress").val(data.email);
        $("#phoneno").val(data.phoneno);
        $("#contactaddr").val(data.contactaddress);
        $("#ctype").val(data.contributioncategory);
        $("#recordid").val(data.id);
        $("#batch").val(data.batch);
        $("#updatestatus").val(data.updatestatus);
        var getamount = parseFloat(data.amount);
        getamount     =  getamount.toFixed(2);
        $("#amount").val(getamount);
        folderName = "passports";                  
        folderpath ="<?php echo base_url(''); ?>" + folderName;
        imgname = "cp"+data.id.trim()+".jpg";
        imgref=folderpath + "/"+imgname;  
        $('#imgprvw').attr('src',imgref);
        fetchpaymenthistory();
      }
    });
  }

  //Fetch Specified Thrift's Account Number
  //---------------------------------------
  function fetchaccountnumber(){
    var passdata = "accountno="+$("#accountno").val().trim();
    $.post("<?php echo site_url('/contributors/fetchaccountnumber'); ?>",passdata).done(function(data){
      if(data!=0){
        var getrow = $.parseJSON(data);
        $("#bank").val(getrow.bank);
        $("#accountname").val(getrow.accountname);
      }else{
        $("#bank").val('');
        $("#accountname").val('');       
      }
    });
  }


  //Fetch the collector for the selected month
  function fetchcollector(){
    var passdata = "category="+$("#ctype").val().trim()+"&batch="+$("#batch").val().trim()+"&monthid="+$("#accountingmonthid").val().trim();
    $.post("<?php echo site_url('/contributors/fetchcollector'); ?>",passdata).done(function(data){
      if(data!=0){
        $("#collector").text(data);
      }else{
        $("#collector").text('');       
      }
    });
  }



  // Fetch Contributor's payment history for the current accounting year
  // -------------------------------------------------------------------
  function fetchpaymenthistory(){
    $("#tbdata").empty();
    $("#tbdata").trigger("liszt:updated");  
    $.getJSON("<?php echo site_url('/contributors/fetchpaymenthistory'); ?>",function(data){

      if (data!=0){
        var rowcount = data.length;       
        var sn = 0;       
        for (var i = 0; i < rowcount; i++){
          sn = sn + 1;
          var getamt = data[i].credit;
          var actbal = data[i].accountbalance;
          actbal =  (parseFloat(actbal)).toFixed(2);
          getamt =  (parseFloat(getamt)).toFixed(2);
          var r1 = "<tr>";
            var r2 = "<td>" + sn + "</td>";  
            var r3 = "<td>" + data[i].accountingmonthname + "</td>";           
            var r4 = "<td style='text-align:center;'>" + getamt + "</td>";
          var r5 = "</tr>";     
          var items = r1 + r2 + r3 + r4 + r5 ;                       
          $('#tbdata').append(items); 
        }
        $("#tbdata").trigger("liszt:updated");
        $("#contotal").text(actbal);
      }
    });
  }

</script>
</html>
