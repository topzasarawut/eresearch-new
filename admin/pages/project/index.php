<?php  
include_once('../authen.php');
// include('../../../php/connect.php');
$sql = "SELECT * FROM `project_eresearch`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Eresearch Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Eresearch Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Project Eresearch Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Project Eresearch List</h3>
          <a href="form-create.php" class="btn btn-primary float-right ">Add Project Eresearch +</a href="">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>ปี</th>
              <th>ประเภท</th>
              <th>รหัส</th>
              <th>ชื่อโครงการ</th>
              <th>นักวิจัย</th>
              <th>สังกัด</th>
              <th>งบประมาณ</th>
              <!-- <th>งวดที่1</th>
              <th>งวดที่2</th>
              <th>งวดที่3</th> -->
              <th>สถานะ</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $num = 0;
            while ($row = $result->fetch_assoc()) {
              $num++;
              ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['sb_sg']; ?></td>
                <td><?php echo $row['idp']; ?></td>
                <td><?php echo $row['pn']; ?><br><?php echo $row['pn1']; ?><br><?php echo $row['pn2']; ?><br><?php echo $row['pn3']; ?><br><?php echo $row['pn4']; ?><br><?php echo $row['pn5']; ?></td>
                <td><br><?php echo $row['r1']; ?><br><?php echo $row['r2']; ?><br><?php echo $row['r3']; ?><br><?php echo $row['r4']; ?><br><?php echo $row['r5']; ?></td>
                <td><br><?php echo $row['ra1']; ?><br><?php echo $row['ra2']; ?><br><?php echo $row['ra3']; ?><br><?php echo $row['ra4']; ?><br><?php echo $row['ra5']; ?></td>
                <td><br><?php echo $row['ab1']; ?><br><?php echo $row['ab2']; ?><br><?php echo $row['ab3']; ?><br><?php echo $row['ab4']; ?><br><?php echo $row['ab5']; ?></td>
                <!-- <td><br><?php echo $row['b1_1']; ?><br><?php echo $row['b2_1']; ?><br><?php echo $row['b3_1']; ?><br><?php echo $row['b4_1']; ?><br><?php echo $row['b5_1']; ?></td>
                <td><br><?php echo $row['b1_2']; ?><br><?php echo $row['b2_2']; ?><br><?php echo $row['b3_2']; ?><br><?php echo $row['b4_2']; ?><br><?php echo $row['b5_2']; ?></td>
                <td><br><?php echo $row['b1_3']; ?><br><?php echo $row['b2_3']; ?><br><?php echo $row['b3_3']; ?><br><?php echo $row['b4_3']; ?><br><?php echo $row['b5_3']; ?></td> -->
                <td><br><?php echo $row['st1']; ?><br><?php echo $row['st2']; ?><br><?php echo $row['st3']; ?><br><?php echo $row['st4']; ?><br><?php echo $row['st5']; ?></td>
                <td>
                  <a href="form-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> edit
                  </a> 
                </td>
                <td>
                  <?php if($row['id'] != 0){ ?>
                  <a href="#" onclick="deleteItem(<?php echo $row['id']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Delete
                  </a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table> 
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      //window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html>
