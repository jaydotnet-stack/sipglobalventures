$(document).ready(function(){
    //global base url variable
    baseUrl = window.location.origin + "/sipupglobalventures/";

    // $("#btn_allocate_user").click(function(){
    //     var market_location = $("#market_location").val();
    //     var hidden_id = $("#hidden_id").val();
    //     if(market_location != "---" ){
    //         var response = confirm("Are you sure you want to approve user account?");
    //         if(response == true){
    //             //get form inputs
    //             passdata = "hiddenId="+hidden_id+"&sentMarketLocation="+market_location;
    //             //post operation
    //             $.post(baseUrl + "admin/mapusertomarket", passdata).done(function(data){
    //                 if(data == 1){
    //                     alert('User mapped to market successfully');
    //                     $("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
    //                     $("#firstname").val('');
    //                     $("#lastname").val('');
    //                     $("#market_location").val('---').change();
    //                     document.getElementById("market_location").disabled = false;
    //                 }else{
    //                     // on error
    //                     // alert(data);
    //                 }
    //             }); 
    //         }
    //     }else{
    //         $("#market_location_error").show();
    //         $("#market_location_error").fadeOut(5000); 
    //     }   
    // });

    $("#btn_add_loan_category").click(function(){
        var loan_level = $("#loan_level").val(); var loan_amount = $("#loan_amount").val();
        var loan_interest = $("#loan_interest").val(); var loan_repayment = $("#loan_repayment").val();
        var loan_savings = $("#loan_savings").val(); var form_fees = $("#form_fees").val();
        var disbursement_fee = $("#disbursement_fee").val(); var insurance_fee = $("#insurance_fee").val();
        if(loan_amount.length > 0 && $.isNumeric(loan_amount) == true ){
            if(loan_interest.length > 0 && $.isNumeric(loan_interest) == true ){
                if(loan_repayment.length > 0 && $.isNumeric(loan_repayment) == true ){
                    if(loan_savings.length > 0 && $.isNumeric(loan_savings) == true ){
                        if(form_fees.length > 0 && $.isNumeric(form_fees) == true ){
                            if(disbursement_fee.length > 0 && $.isNumeric(disbursement_fee) == true ){
                                if(insurance_fee.length > 0 && $.isNumeric(insurance_fee) == true ){
                                    var response = confirm("Are you sure you want to add market location?");
                                    if(response == true){
                                        //get form inputs
                                        var formData = $("#form_loan_categories").serialize();
                                        //post operation
                                        $.post(baseUrl + "admin/addloancategories", formData).done(function(data){
                                            var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";                                
                                            if(data != "" && data !=0){
                                                var data = $.parseJSON(data);
                                                alert('Loan category added/updated successfully');
                                                for(var i = 0; i < data.length; i++) {
                                                    btnAction += "<button type='button' id='"+data[i].loan_category_id  +"' name='"+data[i].loan_category_id  +"' class='btn btn-success px-2 lni lni-pencil' onclick='editLoanCategory(this.id)'>Edit</button>";
                                                    recordCount ++;
                                                    tableObjBuilder +="<tr>"
                                                        tableObjBuilder +="<td>"+recordCount+"</td>"
                                                        tableObjBuilder +="<td>"+data[i].loan_category_amount+"</td>"
                                                        tableObjBuilder +="<td>"+btnAction+"</td>"
                                                    tableObjBuilder +="</tr>"
                                                    btnAction = "";
                                                }
                                                $("#tbl_loan_categories").html(tableObjBuilder);
                                                $("#loan_amount").val('');
                                                $("#loan_interest").val('');
                                                $("#loan_repayment").val('');
                                                $("#loan_savings").val('');
                                                $("#form_fees").val('');
                                                $("#disbursement_fee").val('');
                                                $("#insurance_fee").val('');
                                            }else{
                                                // on error
                                                // alert(data);
                                            }
                                        }); 
                                    }
                                }else{
                                    $("#insurance_fee").focus();
                                    $("#insurance_fee_error").show();
                                    $("#insurance_fee_error").fadeOut(5000); 
                                }
                            }else{
                                $("#disbursement_fee").focus();
                                $("#disbursement_fee_error").show();
                                $("#disbursement_fee_error").fadeOut(5000); 
                            }
                        }else{
                            $("#form_fees").focus();
                            $("#form_fees_error").show();
                            $("#form_fees_error").fadeOut(5000); 
                        }
                    }else{
                        $("#loan_savings").focus();
                        $("#loan_savings_error").show();
                        $("#loan_savings_error").fadeOut(5000); 
                    }
                }else{
                    $("#loan_repayment").focus();
                    $("#loan_repayment_error").show();
                    $("#loan_repayment_error").fadeOut(5000); 
                }
            }else{
                $("#loan_interest").focus();
                $("#loan_interest_error").show();
                $("#loan_interest_error").fadeOut(5000); 
            }
        }else{
            $("#loan_amount").focus();
            $("#loan_amount_error").show();
            $("#loan_amount_error").fadeOut(5000); 
        }   
    });

    $("#btn_add_market").click(function(){
        var market_code = $("#market_code").val(); var market_description = $("#market_description").val();
        if(market_code != "" ){
            if(market_description == ""){
                $("#market_description_error").focus();
                $("#market_description_error").show();
                $("#market_description_error").fadeOut(5000); 
            }else{
                var response = confirm("Are you sure you want to add market location?");
                if(response == true){
                    //get form inputs
                    var passdata = "market_code="+market_code+"&market_desciption="+market_description;
                    //post operation
                    $.post(baseUrl + "admin/addmarketlocation", passdata).done(function(data){
                        var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";                                
                        if(data != "" && data !=0){
                            var data = $.parseJSON(data);
                            alert('Market location added/updated successfully');
                            $("#market_code").val('');
                            $("#market_description").val('');
                            for(var i = 0; i < data.length; i++) {
                                btnAction += "<button type='button' id='"+data[i].market_location_id +"' name='"+data[i].market_location_id +"' class='btn btn-success px-3 lni lni-pencil' onclick='editMarketLocation(this.id)'>Edit</button>";
                                recordCount ++;
                                tableObjBuilder +="<tr>"
                                    tableObjBuilder +="<td>"+recordCount+"</td>"
                                    tableObjBuilder +="<td>"+data[i].market_code+"</td>"
                                    tableObjBuilder +="<td>"+btnAction+"</td>"
                                tableObjBuilder +="</tr>"
                                btnAction = "";
                            }
                            $("#tbl_market_location").html(tableObjBuilder);
                        }else{
                            // on error
                            // alert(data);
                        }
                    }); 
                }
            }
        }else{
            $("#market_code_error").focus();
            $("#market_code_error").show();
            $("#market_code_error").fadeOut(5000); 
        }   
    });

    $("#btn_add_year").click(function(){
        var accounting_year = $("#accounting_year").val(); 
        if(accounting_year != ""){
            if(accounting_year.length == 4){
                if($.isNumeric(accounting_year) == true){
                    var response = confirm("Are you sure you want to add accounting year?");
                    if(response == true){
                        //get form inputs
                        var passdata = 'accounting_year='+accounting_year;
                        //post operation
                        $.post(baseUrl + "admin/addaccountingyear", passdata).done(function(data){
                            var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";                                
                            if(data != "" && data !=0 && data !=2){
                                var data = $.parseJSON(data);
                                alert('Accounting year created successfully');
                                // $("#accounting_year").val('');
                                for(var i = 0; i < data.length; i++) {
                                    if(data[i].accounting_year_status =='Activated'){
                                        btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-success px-2' onclick='activateAccountingYear(this.id)'>Active</button>&nbsp;&nbsp;";
                                    }else{
                                        btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-warning px-2' onclick='activateAccountingYear(this.id)'>Activate</button>&nbsp;&nbsp;";
                                    }
                                    recordCount ++;
                                    tableObjBuilder +="<tr>"
                                        tableObjBuilder +="<td>"+recordCount+"</td>"
                                        tableObjBuilder +="<td>"+data[i].accounting_year+"</td>"
                                        tableObjBuilder +="<td>"+btnAction+"</td>"
                                    tableObjBuilder +="</tr>"
                                    btnAction = "";
                                }
                                $("#tbl_accounting_year").html(tableObjBuilder);
                                getInitialYearDefinition();
                            }else if(data == 2){
                                $("#accounting_year").focus();
                                $("#accounting_year_error").text('Accounting year already exist');
                                $("#accounting_year_error").show();
                                $("#accounting_year_error").fadeOut(5000);
                            }else{
                                // on error
                                // alert(data);
                            }
                        }); 
                    }
                }else{
                    $("#accounting_year_error").text('Accouting year must be a number');
                    $("#accounting_year_error").show();
                    $("#accounting_year_error").fadeOut(5000);
                    $("#accounting_year").focus();  
                }
            }else{
                $("#accounting_year_error").text('Accouting year must 4 digit only');
                $("#accounting_year_error").show();
                $("#accounting_year_error").fadeOut(5000);
                $("#accounting_year").focus();
            }
        }else{
            $("#accounting_year_error").show();
            $("#accounting_year_error").fadeOut(5000);
            $("#accounting_year").focus();
        }
    });

    // password show or hide
    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bx-hide");
            $('#show_hide_password i').removeClass("bx-show");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bx-hide");
            $('#show_hide_password i').addClass("bx-show");
        }
    });    

    $("#btn_register").click(function(){
        var email = $("#email").val(); var firstname = $("#firstname").val(); var lastname = $("#lastname").val();
        var gender       = ""; var sexStatus = false; var phone_number = $("#phone_number").val(); var password = $("#password").val();
        var firstnameLength = parseInt(firstname.length); var lastnameLength = parseInt(lastname.length); 
        var phoneNumberLength = parseInt(phone_number.length); var passwordLength = parseInt(password.length); 
        //validate sex
        sexStatus = document.getElementById("male").checked; 
        if(sexStatus == true){
            gender = "male";
            // alert("male you must select a gender");
        }else{
            sexStatus = document.getElementById("female").checked; 
            if(sexStatus == false){
                // alert("male/female you must select a gender");
            }else{
                gender = "female";
            }
        }
        // alert('gender: ' +gender);
        //validate email 
        function validateEmail(args) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.match(mailformat)) {                                                       
                if(firstnameLength < 3){
                    // $("#password").val('');
                    $("#firstname_error").show();
                    $("#firstname_error").fadeOut(5000);
                    $("#firstname").focus();
                }else if(lastnameLength < 3){
                    $("#lastname_error").show();
                    $("#lastname_error").fadeOut(5000);
                    $("#lastname").focus();
                }else if(gender == ""){
                    $("#gender_error").show();
                    $("#gender_error").fadeOut(5000);
                }else if(phoneNumberLength < 1 || phoneNumberLength <= 10){
                    //$("#phone_number").val('');                                   
                    $("#phone_number").focus();                                   
                    $("#phone_number_error").show();
                    $("#phone_number_error").fadeOut(5000); 
                }else if(passwordLength < 1){
                    // $("#password").val('');
                    $("#password_error").show();
                    $("#password_error").fadeOut(5000);
                    $("#password").focus();                    
                } else{
                    var response = confirm("Are you sure you want to create account?");
                    if(response == true){
                        //get form inputs
                        var formData  = $("#register_form").serialize();
                        //post operation
                        $.post(baseUrl + "admin/register", formData).done(function(data){
                            // alert(data);
                            if(data == 1){
                                //trigger reset function      
                                reset();  
                                alert('User Account Successfully Created');
                                //go to login page
                                window.location.href= baseUrl + "admin/";
                            }else if(data == 2){
                                $("#email").focus();
                                $("#email_error").text('Email exist, please pick another one');
                                $("#email_error").show();
                                $("#email_error").fadeOut(5000);
                            }else if(data == -3){
                                $("#email").focus();
                                alert('User unique number exhausted, please contact system administrator');
                            }else{
                                // on error
                                alert(data);
                            }
                        }); 
                    }
                }                      
            }else{
                //$("#email").val('');
                $("#email_error").show();
                $("#email_error").fadeOut(5000);
                $("#email").focus();
            }
        }
        //triggers email validator function 
        validateEmail(email);   
        function reset(){
            $("#email").val(''); $("#firstname").val(''); $("#lastname").val(''); 
            $("#gender").attr('checked', false); $("#phone_number").val(''); $("#password").val(''); 
        }     
    });

    $("#btn_login").click(function(){
        var email = $("#email").val(); var password = $("#password").val();
        //validate email 
        function validateEmail(args) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.match(mailformat)) {                                                       
                if(password == ""){
                    $("#password_error").show();
                    $("#password_error").fadeOut(5000);
                    $("#password").focus();                    
                } else{
                    var response = confirm("Are you sure you want to create account?");
                    if(response == true){
                        //get form inputs
                        var passdata = 'email='+email+'&password='+password;
                        //post operation
                        $.post(baseUrl + "admin/login", passdata).done(function(data){
                            if(data == 1){
                                alert('Login successfully');
                                //go to landing page
                                window.location.href= baseUrl + "admin/landingpage";
                            }else if(data == 2){
                                $("#email").focus();
                                $("#email_error").text('Account does not exist');
                                $("#email_error").show();
                                $("#email_error").fadeOut(5000);
                            }else if(data == -2){
                                $("#email").focus();
                                $("#email_error").text('Email/Password mismatch');
                                $("#email_error").show();
                                $("#email_error").fadeOut(5000);
                            }else{
                                // on error
                                alert(data);
                            }
                        }); 
                    }
                }                      
            }else{
                //$("#email").val('');
                $("#email_error").show();
                $("#email_error").fadeOut(5000);
                $("#email").focus();
            }
        }
        //triggers email validator function 
        validateEmail(email);         
    });

    // $("#btn_view_update_profile").click(function(){
    //     alert("hurray");
    //     // var formdata = new FormData($("#user_profile_form")[0]);
    //     // $.ajax({
    //     //     url: baseUrl + "admin/updateuserprofile",
    //     //     type: 'POST',
    //     //     data: formdata,
    //     //     async: false,
    //     //     cache: false,
    //     //     contentType: false,
    //     //     processData: false,
    //     //     success: function (data){ 
    //     //         alert(data);
    //     //         if(data == -1){
    //     //             alert("Unable to update profile");
    //     //         }else if(data == 0){
    //     //             alert("Record does not exist");
    //     //         }else{
    //     //             alert("Profile successfully updated");
    //     //             $("#uploadedImage").attr('src', baseUrl + 'userspicture/' + data + '.jpg' + `?v=${new Date().getTime()}`);      
    //     //             $("#uploadedImageX").attr('src', baseUrl + 'userspicture/' + data + '.jpg' + `?v=${new Date().getTime()}`);                                
    //     //             //location.reload();   
    //     //         }
    //     //     }
    //     // });        
    // });
});

//to preview image
function preveiwImage(getImage)
{
    // alert('fdfd');
    var fileType = document.getElementById('userfile').files[0].type;
    var fileSize = document.getElementById('userfile').files[0].size;
    /*******CONVERT IMAGE FILE TO KILOBYTE*******/
    var fileSize = Math.floor(fileSize/(1024));
    if (getImage.files && getImage.files[0]) 
    {
        if(fileType == 'image/jpg' || fileType == 'image/jpeg')
        {
            /******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
            if(fileSize<1025)    
            {
                var imgReader = new FileReader();
                imgReader.onload = function(e) 
                {
                    $('#uploadedImage').attr('src', e.target.result);
                    $('#uploadedImageX').attr('src', e.target.result);
                }
                imgReader.readAsDataURL(getImage.files[0]);       
            }
            else
            {
                alert("Image Size too large for Upload!");
                $("#userfile").val('');
            }
        }  
        else
        {
            alert("File format not Supported/Allowed for Upload!, Please Choose another.");
            $("#userfile").val('');
        }
    }
}

