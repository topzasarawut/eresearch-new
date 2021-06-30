<?php include_once('../authen.php') ?>
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
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../project">Project Eresearch Management</a></li>
              <li class="breadcrumb-item active">Create Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary"> 
        <div class="card-header">
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="create.php" method="post"> 
          <div class="card-body">
            <div class="form-group">
              <label for="year">ปีงบประมาณ</label>
              <input type="text" class="form-control" name="year" id="year" placeholder="ปีงบประมาณ" required>
            </div>

            <div class="form-group">
              <label>ชุดโครงการ/โครงการเดี่ยว</label>

              <select class="form-control" required name="sb_sg">
                <option value="" disabled selected>เลือก ชุดโครงการ/โครงการเดี่ยว</option>
                <option value="ชุดโครงการ">ชุดโครงการ</option>
                <option value="โครงการเดี่ยว">โครงการเดี่ยว</option>
              </select>

            </div>
            <div class="form-group">
              <label for="pn">ชื่อโครงการหลัก</label>
              <input type="text" class="form-control" name="pn" id="pn" placeholder="ชื่อโครงการหลัก " required>
            </div>
            <div class="form-group">
              <label for="idp">รหัสโครงการ </label>
              <input type="text" class="form-control" name="idp" id="idp" placeholder="รหัสโครงการ " required>
            </div>

            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่1</h3>
            </div>

            <div class="form-group">
              <label for="pn1">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn1" id="pn1" placeholder="ชื่อชุดโครงการ" required>
            </div>
            <div class="form-group">
              <label for="r1">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r1" id="r1" placeholder="ชื่อนักวิจัย" required>
            </div>
            
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" required name="rt1">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์">อาจารย์</option>
                <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
              </select>
            </div>
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control" required name="ra1">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์">คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์">โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา">สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ab1">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab1" id="ab1" placeholder="งบประมาณจัดสรร" required>
            </div>
            <div class="form-group">
              <label for="b1_1">งวดที่1</label>
              <input type="text" class="form-control" name="b1_1" id="b1_1" placeholder="งวดที่1" required>
            </div>
            <div class="form-group">
              <label for="b1_2">งวดที่2</label>
              <input type="text" class="form-control" name="b1_2" id="b1_2" placeholder="งวดที่2" required>
            </div>
            <div class="form-group">
              <label for="b1_3">งวดที่3</label>
              <input type="text" class="form-control" name="b1_3" id="b1_3" placeholder="งวดที่3" required>
            </div>
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control" required name="st1">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1">งวดที่1</option>
                <option value="งวดที่2">งวดที่2</option>
                <option value="สำเร็จ">สำเร็จ</option>
                <option value="คืนทุนวิจัย">คืนทุนวิจัย</option>
                <option value="ส่งเล่มสมบูรณ์">ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข">ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก">ลาออก</option>
                <option value="เกษียณ">เกษียณ</option>
              </select>
            </div>


            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่2</h3>
            </div>
            <div class="form-group">
              <label for="pn2">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn2" id="pn2" placeholder="ชื่อชุดโครงการ">
            </div>
            <div class="form-group">
              <label for="r2">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r2" id="r2" placeholder="ชื่อนักวิจัย">
            </div>

            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control"  name="rt2">
                <option value="ยังไม่มีการเลือก">ยังไม่มีการเลือก</option>
                <option value="อาจารย์">อาจารย์</option>
                <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
              </select>
            </div>
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra2">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์">คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์">โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา">สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ab2">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab2" id="ab2" placeholder="งบประมาณจัดสรร">
            </div>
            <div class="form-group">
              <label for="b2_1">งวดที่1</label>
              <input type="text" class="form-control" name="b2_1" id="b2_1" placeholder="งวดที่1">
            </div>
            <div class="form-group">
              <label for="b2_2">งวดที่2</label>
              <input type="text" class="form-control" name="b2_2" id="b2_2" placeholder="งวดที่2">
            </div>
            <div class="form-group">
              <label for="b2_3">งวดที่3</label>
              <input type="text" class="form-control" name="b2_3" id="b2_3" placeholder="งวดที่3">
            </div>
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st2">
              <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1">งวดที่1</option>
                <option value="งวดที่2">งวดที่2</option>
                <option value="สำเร็จ">สำเร็จ</option>
                <option value="คืนทุนวิจัย">คืนทุนวิจัย</option>
                <option value="ส่งเล่มสมบูรณ์">ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข">ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก">ลาออก</option>
                <option value="เกษียณ">เกษียณ</option>
              </select>
            </div>


            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่3</h3>
            </div>
            <div class="form-group">
              <label for="pn3">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn3" id="pn3" placeholder="ชื่อชุดโครงการ">
            </div>
            <div class="form-group">
              <label for="r3">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r3" id="r3" placeholder="ชื่อนักวิจัย">
            </div>
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control"  name="rt3">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="1">อาจารย์</option>
                <option value="2">เจ้าหน้าที่</option>
              </select>
            </div>
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra3">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์">คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์">โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา">สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ab3">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab3" id="ab3" placeholder="งบประมาณจัดสรร">
            </div>
            <div class="form-group">
              <label for="b3_1">งวดที่1</label>
              <input type="text" class="form-control" name="b3_1" id="b3_1" placeholder="งวดที่1">
            </div>
            <div class="form-group">
              <label for="b3_2">งวดที่2</label>
              <input type="text" class="form-control" name="b3_2" id="b3_2" placeholder="งวดที่2">
            </div>
            <div class="form-group">
              <label for="b3_3">งวดที่3</label>
              <input type="text" class="form-control" name="b3_3" id="b3_3" placeholder="งวดที่3">
            </div>
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st3">
              <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1">งวดที่1</option>
                <option value="งวดที่2">งวดที่2</option>
                <option value="สำเร็จ">สำเร็จ</option>
                <option value="คืนทุนวิจัย">คืนทุนวิจัย</option>
                <option value="ส่งเล่มสมบูรณ์">ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข">ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก">ลาออก</option>
                <option value="เกษียณ">เกษียณ</option>
              </select>
            </div>


            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่4</h3>
            </div>
            <div class="form-group">
              <label for="pn4">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn4" id="pn4" placeholder="ชื่อชุดโครงการ">
            </div>
            <div class="form-group">
              <label for="r4">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r4" id="r4" placeholder="ชื่อนักวิจัย">
            </div>
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control"  name="rt4">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์">อาจารย์</option>
                <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
              </select>
            </div>
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra4">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์">คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์">โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา">สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ab4">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab4" id="ab4" placeholder="งบประมาณจัดสรร">
            </div>
            <div class="form-group">
              <label for="b4_1">งวดที่1</label>
              <input type="text" class="form-control" name="b4_1" id="b4_1" placeholder="งวดที่1">
            </div>
            <div class="form-group">
              <label for="b4_2">งวดที่2</label>
              <input type="text" class="form-control" name="b4_2" id="b4_2" placeholder="งวดที่2">
            </div>
            <div class="form-group">
              <label for="b4_3">งวดที่3</label>
              <input type="text" class="form-control" name="b4_3" id="b4_3" placeholder="งวดที่3">
            </div>
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st4">
              <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1">งวดที่1</option>
                <option value="งวดที่2">งวดที่2</option>
                <option value="สำเร็จ">สำเร็จ</option>
                <option value="คืนทุนวิจัย">คืนทุนวิจัย</option>
                <option value="ส่งเล่มสมบูรณ์">ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข">ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก">ลาออก</option>
                <option value="เกษียณ">เกษียณ</option>
              </select>
            </div>


            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่5</h3>
            </div>
            <div class="form-group">
              <label for="pn5">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn5" id="pn5" placeholder="ชื่อชุดโครงการ">
            </div>
            <div class="form-group">
              <label for="r5">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r5" id="r5" placeholder="ชื่อนักวิจัย">
            </div>
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control"  name="rt5">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์">อาจารย์</option>
                <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
              </select>
            </div>
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra5">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์">คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์">โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา">สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ab5">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab5" id="ab5" placeholder="งบประมาณจัดสรร">
            </div>
            <div class="form-group">
              <label for="b5_1">งวดที่1</label>
              <input type="text" class="form-control" name="b5_1" id="b5_1" placeholder="งวดที่1">
            </div>
            <div class="form-group">
              <label for="b5_2">งวดที่2</label>
              <input type="text" class="form-control" name="b5_2" id="b5_2" placeholder="งวดที่2">
            </div>
            <div class="form-group">
              <label for="b5_3">งวดที่3</label>
              <input type="text" class="form-control" name="b5_3" id="b5_3" placeholder="งวดที่3">
            </div>
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st5">
              <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1">งวดที่1</option>
                <option value="งวดที่2">งวดที่2</option>
                <option value="สำเร็จ">สำเร็จ</option>
                <option value="คืนทุนวิจัย">คืนทุนวิจัย</option>
                <option value="ส่งเล่มสมบูรณ์">ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข">ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก">ลาออก</option>
                <option value="เกษียณ">เกษียณ</option>
              </select>
            </div>
          </div>
          <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
          </div>
        </form>
      </div>    
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
</script>

</body>
</html>
