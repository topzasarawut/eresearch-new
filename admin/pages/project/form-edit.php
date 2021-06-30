<?php  
  include_once('../authen.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM `project_eresearch` WHERE `id` = '".$id."' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
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
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../village">Project Eresearch Management</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update.php" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="year">ปีงบประมาณ</label>
              <input type="text" class="form-control" name="year" id="year" placeholder="ปีงบประมาณ" value="<?php echo $row['year']; ?>" required>
            </div>
            <div class="form-group">
              <label>ชุดโครงการ/โครงการเดี่ยว</label>
              <select class="form-control" required name="sb_sg">
                <option value="" disabled selected>เลือก ชุดโครงการ/โครงการเดี่ยว</option>
                <option value="ชุดโครงการ"<?php echo $row['sb_sg'] == 'ชุดโครงการ'? 'selected': '' ?>>ชุดโครงการ</option>
                <option value="โครงการเดี่ยว"<?php echo $row['sb_sg'] == 'โครงการเดี่ยว'? 'selected': '' ?>>โครงการเดี่ยว</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pn">ชื่อโครงการหลัก</label>
              <input type="text" class="form-control" name="pn" id="pn" placeholder="ชื่อโครงการหลัก "value="<?php echo $row['pn']; ?>" required>
            </div>
            <div class="form-group">
              <label for="idp">รหัสโครงการ </label>
              <input type="text" class="form-control" name="idp" id="idp" placeholder="รหัสโครงการ " value="<?php echo $row['idp']; ?>" required>
            </div>




            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่1</h3>
            </div>

            <div class="form-group">
              <label for="pn1">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn1" id="pn1" placeholder="ชื่อชุดโครงการ"value="<?php echo $row['pn1']; ?>" required >
            </div>
            <div class="form-group">
              <label for="r1">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r1" id="r1" placeholder="ชื่อนักวิจัย"value="<?php echo $row['r1']; ?>" required >
            </div>
            
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" required name="rt1">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์"<?php echo $row['rt1'] == 'อาจารย์'? 'selected': '' ?>>อาจารย์</option>
                <option value="เจ้าหน้าที่"<?php echo $row['rt1'] == 'เจ้าหน้าที่'? 'selected': '' ?>>เจ้าหน้าที่</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">ประเภทนักวิจัย </label>
              <input type="text" class="form-control" name="rt1" id="rt1" placeholder="ประเภทนักวิจัย">
            </div> -->
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control" required name="ra1">
                <option value="" disabled selected>เลือก สังกัดนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์"<?php echo $row['ra1'] == 'คณะศิลปศาสตร์และวิทยาศาสตร์'? 'selected': '' ?>>คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์"<?php echo $row['ra1'] == 'คณะครุศาสตร์'? 'selected': '' ?>>คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์"<?php echo $row['ra1'] == 'คณะพยาบาลศาสตร์'? 'selected': '' ?>>คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์"<?php echo $row['ra1'] == 'คณะรัฐศาสตร์'? 'selected': '' ?>>คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ"<?php echo $row['ra1'] == 'คณะบริหารธุรกิจ'? 'selected': '' ?>>คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์"<?php echo $row['ra1'] == 'โครงการจัดตั้งคณะวิศวกรรมศาสตร์'? 'selected': '' ?>>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี"<?php echo $row['ra1'] == 'สำนักงานอธิการบดี'? 'selected': '' ?>>สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา"<?php echo $row['ra1'] == 'สถาบันวิจัยและพัฒนา'? 'selected': '' ?>>สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">สังกัดนักวิจัย</label>
              <input type="text" class="form-control" name="ra1" id="ra1" placeholder="สังกัดนักวิจัย">
            </div> -->
            <div class="form-group">
              <label for="ab1">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab1" id="ab1" placeholder="งบประมาณจัดสรร"value="<?php echo $row['ab1']; ?>" required >
            </div>
            <div class="form-group">
              <label for="b1_1">งวดที่1</label>
              <input type="text" class="form-control" name="b1_1" id="b1_1" placeholder="งวดที่1"value="<?php echo $row['b1_1']; ?>" required >
            </div>
            <div class="form-group">
              <label for="b1_2">งวดที่2</label>
              <input type="text" class="form-control" name="b1_2" id="b1_2" placeholder="งวดที่2"value="<?php echo $row['b1_2']; ?>" required >
            </div>
            <div class="form-group">
              <label for="b1_3">งวดที่3</label>
              <input type="text" class="form-control" name="b1_3" id="b1_3" placeholder="งวดที่3"value="<?php echo $row['b1_3']; ?>" required >
            </div>
            <!-- <div class="form-group">
              <label for="st1">สถานะ</label>
              <input type="text" class="form-control" name="st1" id="st1" placeholder="สถานะ"value="<?php echo $row['st1']; ?>" >
            </div> -->
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control" required name="st1">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1"<?php echo $row['st1'] == 'งวดที่1'? 'selected': '' ?>>งวดที่1</option>
                <option value="งวดที่2"<?php echo $row['st1'] == 'งวดที่2'? 'selected': '' ?>>งวดที่2</option>
                <option value="สำเร็จ"<?php echo $row['st1'] == 'สำเร็จ'? 'selected': '' ?>>สำเร็จ</option>
                <option value="คืนทุนวิจัย"<?php echo $row['st1'] == 'คืนทุนวิจัย'? 'selected': '' ?>>คืนทุน</option>
                <option value="ส่งเล่มสมบูรณ์"<?php echo $row['st1'] == 'ส่งเล่มสมบูรณ์'? 'selected': '' ?>>ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข"<?php echo $row['st1'] == 'ส่งตรวจ/แก้ไข'? 'selected': '' ?>>ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก"<?php echo $row['st1'] == 'ลาออก'? 'selected': '' ?>>ลาออก</option>
                <option value="เกษียณ"<?php echo $row['st1'] == 'เกษียณ'? 'selected': '' ?>>เกษียณ</option>
              </select>
            </div>        





            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่2</h3>
            </div>

            <div class="form-group">
              <label for="pn2">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn2" id="pn2" placeholder="ชื่อชุดโครงการ"value="<?php echo $row['pn2']; ?>" >
            </div>
            <div class="form-group">
              <label for="r2">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r2" id="r2" placeholder="ชื่อนักวิจัย"value="<?php echo $row['r2']; ?>" >
            </div>

            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" name="rt2">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์"<?php echo $row['rt2'] == 'อาจารย์'? 'selected': '' ?>>อาจารย์</option>
                <option value="เจ้าหน้าที่"<?php echo $row['rt2'] == 'เจ้าหน้าที่'? 'selected': '' ?>>เจ้าหน้าที่</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">ประเภทนักวิจัย </label>
              <input type="text" class="form-control" name="rt2" id="rt2" placeholder="ประเภทนักวิจัย">
            </div> -->
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra2">
                <option value="" disabled selected>เลือก สังกัดนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์"<?php echo $row['ra2'] == 'คณะศิลปศาสตร์และวิทยาศาสตร์'? 'selected': '' ?>>คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์"<?php echo $row['ra2'] == 'คณะครุศาสตร์'? 'selected': '' ?>>คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์"<?php echo $row['ra2'] == 'คณะพยาบาลศาสตร์'? 'selected': '' ?>>คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์"<?php echo $row['ra2'] == 'คณะรัฐศาสตร์'? 'selected': '' ?>>คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ"<?php echo $row['ra2'] == 'คณะบริหารธุรกิจ'? 'selected': '' ?>>คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์"<?php echo $row['ra2'] == 'โครงการจัดตั้งคณะวิศวกรรมศาสตร์'? 'selected': '' ?>>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี"<?php echo $row['ra2'] == 'สำนักงานอธิการบดี'? 'selected': '' ?>>สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา"<?php echo $row['ra2'] == 'สถาบันวิจัยและพัฒนา'? 'selected': '' ?>>สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">สังกัดนักวิจัย</label>
              <input type="text" class="form-control" name="ra2" id="ra2" placeholder="สังกัดนักวิจัย">
            </div> -->
            <div class="form-group">
              <label for="ab2">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab2" id="ab2" placeholder="งบประมาณจัดสรร"value="<?php echo $row['ab2']; ?>" >
            </div>
            <div class="form-group">
              <label for="b2_1">งวดที่1</label>
              <input type="text" class="form-control" name="b2_1" id="b2_1" placeholder="งวดที่1"value="<?php echo $row['b2_1']; ?>" >
            </div>
            <div class="form-group">
              <label for="b2_2">งวดที่2</label>
              <input type="text" class="form-control" name="b2_2" id="b2_2" placeholder="งวดที่2"value="<?php echo $row['b2_2']; ?>" >
            </div>
            <div class="form-group">
              <label for="b2_3">งวดที่3</label>
              <input type="text" class="form-control" name="b2_3" id="b2_3" placeholder="งวดที่3"value="<?php echo $row['b2_3']; ?>" >
            </div>
            <!-- <div class="form-group">
              <label for="st2">สถานะ</label>
              <input type="text" class="form-control" name="st2" id="st2" placeholder="สถานะ"value="<?php echo $row['st2']; ?>" >
            </div> -->
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st2">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1"<?php echo $row['st2'] == 'งวดที่1'? 'selected': '' ?>>งวดที่1</option>
                <option value="งวดที่2"<?php echo $row['st2'] == 'งวดที่2'? 'selected': '' ?>>งวดที่2</option>
                <option value="สำเร็จ"<?php echo $row['st2'] == 'สำเร็จ'? 'selected': '' ?>>สำเร็จ</option>
                <option value="คืนทุนวิจัย"<?php echo $row['st2'] == 'คืนทุนวิจัย'? 'selected': '' ?>>คืนทุน</option>
                <option value="ส่งเล่มสมบูรณ์"<?php echo $row['st2'] == 'ส่งเล่มสมบูรณ์'? 'selected': '' ?>>ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข"<?php echo $row['st2'] == 'ส่งตรวจ/แก้ไข'? 'selected': '' ?>>ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก"<?php echo $row['st2'] == 'ลาออก'? 'selected': '' ?>>ลาออก</option>
                <option value="เกษียณ"<?php echo $row['st2'] == 'เกษียณ'? 'selected': '' ?>>เกษียณ</option>
              </select>
            </div> 




            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่3</h3>
            </div>

            <div class="form-group">
              <label for="pn3">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn3" id="pn3" placeholder="ชื่อชุดโครงการ"value="<?php echo $row['pn3']; ?>" >
            </div>
            <div class="form-group">
              <label for="r3">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r3" id="r3" placeholder="ชื่อนักวิจัย"value="<?php echo $row['r3']; ?>" >
            </div>

            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" name="rt3">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์"<?php echo $row['rt3'] == 'อาจารย์'? 'selected': '' ?>>อาจารย์</option>
                <option value="เจ้าหน้าที่"<?php echo $row['rt3'] == 'เจ้าหน้าที่'? 'selected': '' ?>>เจ้าหน้าที่</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">ประเภทนักวิจัย </label>
              <input type="text" class="form-control" name="rt3" id="rt3" placeholder="ประเภทนักวิจัย">
            </div> -->
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra3">
                <option value="" disabled selected>เลือก สังกัดนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์"<?php echo $row['ra3'] == 'คณะศิลปศาสตร์และวิทยาศาสตร์'? 'selected': '' ?>>คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์"<?php echo $row['ra3'] == 'คณะครุศาสตร์'? 'selected': '' ?>>คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์"<?php echo $row['ra3'] == 'คณะพยาบาลศาสตร์'? 'selected': '' ?>>คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์"<?php echo $row['ra3'] == 'คณะรัฐศาสตร์'? 'selected': '' ?>>คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ"<?php echo $row['ra3'] == 'คณะบริหารธุรกิจ'? 'selected': '' ?>>คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์"<?php echo $row['ra3'] == 'โครงการจัดตั้งคณะวิศวกรรมศาสตร์'? 'selected': '' ?>>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี"<?php echo $row['ra3'] == 'สำนักงานอธิการบดี'? 'selected': '' ?>>สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา"<?php echo $row['ra3'] == 'สถาบันวิจัยและพัฒนา'? 'selected': '' ?>>สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">สังกัดนักวิจัย</label>
              <input type="text" class="form-control" name="ra3" id="ra3" placeholder="สังกัดนักวิจัย">
            </div> -->
            <div class="form-group">
              <label for="ab3">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab3" id="ab3" placeholder="งบประมาณจัดสรร"value="<?php echo $row['ab3']; ?>" >
            </div>
            <div class="form-group">
              <label for="b3_1">งวดที่1</label>
              <input type="text" class="form-control" name="b3_1" id="b3_1" placeholder="งวดที่1"value="<?php echo $row['b3_1']; ?>" >
            </div>
            <div class="form-group">
              <label for="b3_2">งวดที่2</label>
              <input type="text" class="form-control" name="b3_2" id="b3_2" placeholder="งวดที่2"value="<?php echo $row['b3_2']; ?>" >
            </div>
            <div class="form-group">
              <label for="b3_3">งวดที่3</label>
              <input type="text" class="form-control" name="b3_3" id="b3_3" placeholder="งวดที่3"value="<?php echo $row['b3_3']; ?>" >
            </div>
            <!-- <div class="form-group">
              <label for="st3">สถานะ</label>
              <input type="text" class="form-control" name="st3" id="st3" placeholder="สถานะ"value="<?php echo $row['st3']; ?>" >
            </div> -->
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st3">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1"<?php echo $row['st3'] == 'งวดที่1'? 'selected': '' ?>>งวดที่1</option>
                <option value="งวดที่2"<?php echo $row['st3'] == 'งวดที่2'? 'selected': '' ?>>งวดที่2</option>
                <option value="สำเร็จ"<?php echo $row['st3'] == 'สำเร็จ'? 'selected': '' ?>>สำเร็จ</option>
                <option value="คืนทุนวิจัย"<?php echo $row['st3'] == 'คืนทุนวิจัย'? 'selected': '' ?>>คืนทุน</option>
                <option value="ส่งเล่มสมบูรณ์"<?php echo $row['st3'] == 'ส่งเล่มสมบูรณ์'? 'selected': '' ?>>ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข"<?php echo $row['st3'] == 'ส่งตรวจ/แก้ไข'? 'selected': '' ?>>ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก"<?php echo $row['st3'] == 'ลาออก'? 'selected': '' ?>>ลาออก</option>
                <option value="เกษียณ"<?php echo $row['st3'] == 'เกษียณ'? 'selected': '' ?>>เกษียณ</option>
              </select>
              </select>
            </div> 





            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่4</h3>
            </div>

            <div class="form-group">
              <label for="pn4">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn4" id="pn4" placeholder="ชื่อชุดโครงการ"value="<?php echo $row['pn4']; ?>" >
            </div>
            <div class="form-group">
              <label for="r4">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r4" id="r4" placeholder="ชื่อนักวิจัย"value="<?php echo $row['r4']; ?>" >
            </div>
           
            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" name="rt4">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์"<?php echo $row['rt4'] == 'อาจารย์'? 'selected': '' ?>>อาจารย์</option>
                <option value="เจ้าหน้าที่"<?php echo $row['rt4'] == 'เจ้าหน้าที่'? 'selected': '' ?>>เจ้าหน้าที่</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">ประเภทนักวิจัย </label>
              <input type="text" class="form-control" name="rt4" id="rt4" placeholder="ประเภทนักวิจัย">
            </div> -->
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra4">
                <option value="" disabled selected>เลือก สังกัดนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์"<?php echo $row['ra4'] == 'คณะศิลปศาสตร์และวิทยาศาสตร์'? 'selected': '' ?>>คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์"<?php echo $row['ra4'] == 'คณะครุศาสตร์'? 'selected': '' ?>>คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์"<?php echo $row['ra4'] == 'คณะพยาบาลศาสตร์'? 'selected': '' ?>>คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์"<?php echo $row['ra4'] == 'คณะรัฐศาสตร์'? 'selected': '' ?>>คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ"<?php echo $row['ra4'] == 'คณะบริหารธุรกิจ'? 'selected': '' ?>>คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์"<?php echo $row['ra4'] == 'โครงการจัดตั้งคณะวิศวกรรมศาสตร์'? 'selected': '' ?>>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี"<?php echo $row['ra4'] == 'สำนักงานอธิการบดี'? 'selected': '' ?>>สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา"<?php echo $row['ra4'] == 'สถาบันวิจัยและพัฒนา'? 'selected': '' ?>>สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">สังกัดนักวิจัย</label>
              <input type="text" class="form-control" name="ra4" id="ra4" placeholder="สังกัดนักวิจัย">
            </div> -->
            <div class="form-group">
              <label for="ab4">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab4" id="ab4" placeholder="งบประมาณจัดสรร"value="<?php echo $row['ab4']; ?>" >
            </div>
            <div class="form-group">
              <label for="b4_1">งวดที่1</label>
              <input type="text" class="form-control" name="b4_1" id="b4_1" placeholder="งวดที่1"value="<?php echo $row['b4_1']; ?>" >
            </div>
            <div class="form-group">
              <label for="b4_2">งวดที่2</label>
              <input type="text" class="form-control" name="b4_2" id="b4_2" placeholder="งวดที่2"value="<?php echo $row['b4_2']; ?>" >
            </div>
            <div class="form-group">
              <label for="b4_3">งวดที่3</label>
              <input type="text" class="form-control" name="b4_3" id="b4_3" placeholder="งวดที่3"value="<?php echo $row['b4_3']; ?>" >
            </div>
            <!-- <div class="form-group">
              <label for="st4">สถานะ</label>
              <input type="text" class="form-control" name="st4" id="st4" placeholder="สถานะ"value="<?php echo $row['st4']; ?>" >
            </div> -->
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st4">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1"<?php echo $row['st4'] == 'งวดที่1'? 'selected': '' ?>>งวดที่1</option>
                <option value="งวดที่2"<?php echo $row['st4'] == 'งวดที่2'? 'selected': '' ?>>งวดที่2</option>
                <option value="สำเร็จ"<?php echo $row['st4'] == 'สำเร็จ'? 'selected': '' ?>>สำเร็จ</option>
                <option value="คืนทุนวิจัย"<?php echo $row['st4'] == 'คืนทุนวิจัย'? 'selected': '' ?>>คืนทุน</option>
                <option value="ส่งเล่มสมบูรณ์"<?php echo $row['st4'] == 'ส่งเล่มสมบูรณ์'? 'selected': '' ?>>ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข"<?php echo $row['st4'] == 'ส่งตรวจ/แก้ไข'? 'selected': '' ?>>ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก"<?php echo $row['st4'] == 'ลาออก'? 'selected': '' ?>>ลาออก</option>
                <option value="เกษียณ"<?php echo $row['st4'] == 'เกษียณ'? 'selected': '' ?>>เกษียณ</option>
              </select>
            </div> 





            <div class="card-header">
              <h3 class="card-title">ชุดโครงการที่5</h3>
            </div>

            <div class="form-group">
              <label for="pn5">ชื่อชุดโครงการ </label>
              <input type="text" class="form-control" name="pn5" id="pn5" placeholder="ชื่อชุดโครงการ"value="<?php echo $row['pn5']; ?>" >
            </div>
            <div class="form-group">
              <label for="r5">ชื่อนักวิจัย </label>
              <input type="text" class="form-control" name="r5" id="r5" placeholder="ชื่อนักวิจัย"value="<?php echo $row['r5']; ?>" >
            </div>

            <div class="form-group">
              <label>ประเภทนักวิจัย</label>
              <select class="form-control" name="rt5">
                <option value="" disabled selected>เลือก ประเภทนักวิจัย</option>
                <option value="อาจารย์"<?php echo $row['rt5'] == 'อาจารย์'? 'selected': '' ?>>อาจารย์</option>
                <option value="เจ้าหน้าที่"<?php echo $row['rt5'] == 'เจ้าหน้าที่'? 'selected': '' ?>>เจ้าหน้าที่</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">ประเภทนักวิจัย </label>
              <input type="text" class="form-control" name="rt5" id="rt5" placeholder="ประเภทนักวิจัย">
            </div> -->
            <div class="form-group">
              <label>สังกัดนักวิจัย</label>
              <select class="form-control"  name="ra5">
                <option value="" disabled selected>เลือก สังกัดนักวิจัย</option>
                <option value="คณะศิลปศาสตร์และวิทยาศาสตร์"<?php echo $row['ra5'] == 'คณะศิลปศาสตร์และวิทยาศาสตร์'? 'selected': '' ?>>คณะศิลปศาสตร์และวิทยาศาสตร์</option>
                <option value="คณะครุศาสตร์"<?php echo $row['ra5'] == 'คณะครุศาสตร์'? 'selected': '' ?>>คณะครุศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์"<?php echo $row['ra5'] == 'คณะพยาบาลศาสตร์'? 'selected': '' ?>>คณะพยาบาลศาสตร์</option>
                <option value="คณะรัฐศาสตร์"<?php echo $row['ra5'] == 'คณะรัฐศาสตร์'? 'selected': '' ?>>คณะรัฐศาสตร์</option>
                <option value="คณะบริหารธุรกิจ"<?php echo $row['ra5'] == 'คณะบริหารธุรกิจ'? 'selected': '' ?>>คณะบริหารธุรกิจ</option>
                <option value="โครงการจัดตั้งคณะวิศวกรรมศาสตร์"<?php echo $row['ra5'] == 'โครงการจัดตั้งคณะวิศวกรรมศาสตร์'? 'selected': '' ?>>โครงการจัดตั้งคณะวิศวกรรมศาสตร์</option>
                <option value="สำนักงานอธิการบดี"<?php echo $row['ra5'] == 'สำนักงานอธิการบดี'? 'selected': '' ?>>สำนักงานอธิการบดี</option>
                <option value="สำนักวิทยบริการและเทคโนโลยีสารสนเทศ">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                <option value="สถาบันวิจัยและพัฒนา"<?php echo $row['ra5'] == 'สถาบันวิจัยและพัฒนา'? 'selected': '' ?>>สถาบันวิจัยและพัฒนา</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="id_village">สังกัดนักวิจัย</label>
              <input type="text" class="form-control" name="ra5" id="ra5" placeholder="สังกัดนักวิจัย">
            </div> -->
            <div class="form-group">
              <label for="ab5">งบประมาณจัดสรร</label>
              <input type="text" class="form-control" name="ab5" id="ab5" placeholder="งบประมาณจัดสรร"value="<?php echo $row['ab5']; ?>" >
            </div>
            <div class="form-group">
              <label for="b5_1">งวดที่1</label>
              <input type="text" class="form-control" name="b5_1" id="b5_1" placeholder="งวดที่1"value="<?php echo $row['b5_1']; ?>" >
            </div>
            <div class="form-group">
              <label for="b5_2">งวดที่2</label>
              <input type="text" class="form-control" name="b5_2" id="b5_2" placeholder="งวดที่2"value="<?php echo $row['b5_2']; ?>" >
            </div>
            <div class="form-group">
              <label for="b5_3">งวดที่3</label>
              <input type="text" class="form-control" name="b5_3" id="b5_3" placeholder="งวดที่3"value="<?php echo $row['b5_3']; ?>" >
            </div>
            <!-- <div class="form-group">
              <label for="st5">สถานะ</label>
              <input type="text" class="form-control" name="st5" id="st5" placeholder="สถานะ"value="<?php echo $row['st5']; ?>" >
            </div> -->
            <div class="form-group">
              <label>สถานะ</label>
              <select class="form-control"  name="st5">
                <option value="" disabled selected>เลือก สถานะ</option>
                <option value="งวดที่1"<?php echo $row['st5'] == 'งวดที่1'? 'selected': '' ?>>งวดที่1</option>
                <option value="งวดที่2"<?php echo $row['st5'] == 'งวดที่2'? 'selected': '' ?>>งวดที่2</option>
                <option value="สำเร็จ"<?php echo $row['st5'] == 'สำเร็จ'? 'selected': '' ?>>สำเร็จ</option>
                <option value="คืนทุนวิจัย"<?php echo $row['st5'] == 'คืนทุนวิจัย'? 'selected': '' ?>>คืนทุน</option>
                <option value="ส่งเล่มสมบูรณ์"<?php echo $row['st5'] == 'ส่งเล่มสมบูรณ์'? 'selected': '' ?>>ส่งเล่มสมบูรณ์</option>
                <option value="ส่งตรวจ/แก้ไข"<?php echo $row['st5'] == 'ส่งตรวจ/แก้ไข'? 'selected': '' ?>>ส่งตรวจ/แก้ไข</option>
                <option value="ลาออก"<?php echo $row['st5'] == 'ลาออก'? 'selected': '' ?>>ลาออก</option>
                <option value="เกษียณ"<?php echo $row['st5'] == 'เกษียณ'? 'selected': '' ?>>เกษียณ</option>
              </select>
            </div> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">

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
