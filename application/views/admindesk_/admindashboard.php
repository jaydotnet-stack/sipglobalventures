<!DOCTYPE html>
<html lang="en">
<head>
     <?php echo $sitecss; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
        <?php echo $adminmenu; ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Menu Head Two -->
    <?php echo $menuhead2; ?>
    <!-- Menu Head Two -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Info boxes -->  
        <?php //echo $infoboxes; ?>
        <!-- Info boxes -->

        <!-- Info boxes -->  
        <?php echo $projectdetails; ?>
        <!-- Info boxes -->


        <!-- Dashboard section - 1 -->
        <?php //echo $dashboardsect1; ?>
        <!-- Dashboard section - 1 -->

        <!-- /.row -->

        <!-- Main row -->
        <div class="row">

          <!-- Left col -->
          <?php //echo $dashboardsect2a; ?>
          <!-- /.col -->

          <!-- Right col -->
          <?php //echo $dashboardsect2b; ?>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php echo $sitefooter; ?>
</div>
<!-- ./wrapper -->

  <?php echo $sitescript; ?>
</body>
</html>
