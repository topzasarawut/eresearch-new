<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
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
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>

  <?php
        include_once('../../php/connect.php');
       

        //จำนวนโครงการวิจัย ทั้งหมด
        $sql = "SELECT COUNT(*) AS aa  FROM project_eresearch WHERE year='2562' "; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $countres= $row["aa"];

        //จำนวนโครงการวิจัย คณะศิลปศาสตร์และวิทยาศาสตร์
        $sql = "SELECT COUNT(ra1) AS aa  FROM project_eresearch WHERE ra1='คณะศิลปศาสตร์และวิทยาศาสตร์'"; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $countra1art= $row["aa"];

        //จำนวนโครงการวิจัย คณะรัฐศาสตร์
        $sql = "SELECT COUNT(ra1) AS aa  FROM project_eresearch WHERE ra1='คณะรัฐศาสตร์'"; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $countra1pol= $row["aa"];

        // จำนวนงบประมาณ
        //งบจัดสรรที่ 1
        $sql = "SELECT SUM(ab1) AS topza FROM project_eresearch WHERE year='2562'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sumab1= $row["topza"];
        //งบจัดสรรที่ 2
        $sql = "SELECT SUM(ab2) AS topza FROM project_eresearch WHERE year='2562'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sumab2= $row["topza"];
        //งบจัดสรรที่ 3
        $sql = "SELECT SUM(ab3) AS topza FROM project_eresearch WHERE year='2562'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sumab3= $row["topza"];
        //งบจัดสรรที่ 4
        $sql = "SELECT SUM(ab4) AS topza FROM project_eresearch WHERE year='2562'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sumab4= $row["topza"];
        //งบจัดสรรที่ 5
        $sql = "SELECT SUM(ab5) AS topza FROM project_eresearch WHERE year='2562'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $sumab5= $row["topza"];

        //งบรวมทั้งหมด
        $sumaball = ($sumab1+$sumab2+$sumab3+$sumab4+$sumab5)
        
        // จำนวน งบประมาณ
        //จำนวน งบประมาณ คณะศิลปศาสตร์และวิทยาศาสตร์
        // $sql = "SELECT 
        // SUM(ab1) AS ab1,
        // SUM(ab2) AS ab2,
        // SUM(ab3) AS ab3,
        // SUM(ab4) AS ab4,
        // SUM(ab5) AS ab5
        // FROM project_eresearch WHERE ra1='คณะศิลปศาสตร์และวิทยาศาสตร์'"; 
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();
        // $sumtra1art = $row["ab1"]; + $row["ab2"]; + $row["ab3"]; + $row["ab4"]; + $row["ab5"]; 
        
        //แยกแต่ละคณะ
        //งบประมาณคณะศิลปศาสตร์และวิทยาศาสตร์
        // $sql = "SELECT SUM(ab1) AS topza FROM project_eresearch WHERE ra1 = "คณะศิลปศาสตร์และวิทยาศาสตร์"";
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();
        // $sumA= $row["topza"];
        // echo $sumA;

  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ปี2562</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">ปี2562</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $countres; ?>&nbsp;โครงการ</h3>
                <p>จำนวนโครงการวิจัย</p>
                <!-- <h6>คณะศิลปศาสตร์และวิทยาศาสตร์</h6>
                <h6>คณะครุศาสตร์</h6>
                <h6>คณะพยาบาลศาสตร์</h6>
                <h6>คณะรัฐศาสตร์</h6>
                <h6>คณะบริหารธุรกิจ</h6>
                <h6>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</h6>
                <h6>สำนักงานอธิการบดี</h6>
                <h6>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</h6>
                <h6>สถาบันวิจัยและพัฒนา</h6> -->
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><h3><?php echo $sumaball; ?>&nbsp;บาท</h3>
                <p>จำนวนงบประมาณ</p>
                <!-- <h6>คณะศิลปศาสตร์และวิทยาศาสตร์</h6>
                <h6>คณะครุศาสตร์</h6>
                <h6>คณะพยาบาลศาสตร์</h6>
                <h6>คณะรัฐศาสตร์</h6>
                <h6>คณะบริหารธุรกิจ</h6>
                <h6>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</h6>
                <h6>สำนักงานอธิการบดี</h6>
                <h6>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</h6>
                <h6>สถาบันวิจัยและพัฒนา</h6> -->
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
      
        </div>
        <!-- /.row -->
        
        <?php
           $sql = "SELECT * FROM `project_eresearch`WHERE `year`=2562";
           $result = $conn->query($sql);
          //  echo $result;
        ?>
       <!-- Default box -->
       <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">research2562 List</h3>
          <!-- <a href="form-create.php" class="btn btn-primary float-right ">Add Project Eresearch +</a href=""> -->
        </div>
      
          <!-- Main row -->
          <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
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
              <!-- <th>งวดที่1</th>
              <th>งวดที่2</th>
              <th>งวดที่3</th> -->
              <th>สถานะ</th>
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
                
              </tr>
            <?php } ?>
            </tbody>
          </table> 
        </div>
        <!-- /.card-body -->
        </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
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
