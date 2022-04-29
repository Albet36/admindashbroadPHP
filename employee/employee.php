<!DOCTYPE html>
<html lang="en">
<?php  require_once("../../admindashbroad/partials/head.php") ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 

  <!-- Navbar -->
<?php require_once("../../admindashbroad/partials/navbar.php") ?>
  <!-- /.navbar -->
  <?php require_once("../../admindashbroad/partials/sidebar.php") ?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>List</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
          
                  <tr>
                      <td>1</td>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                    <td>1</td>
                    <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->

<?php  require_once("../../admindashbroad/partials/script.php") ?>
</body>
</html>
