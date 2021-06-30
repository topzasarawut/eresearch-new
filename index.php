<?php 
  include_once('php/connect.php');
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
</head>
<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    <br><br>
    <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1587397070638-81d3cce10435?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1536617621572-1d5f1e6269a0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1554744512-d6c603f27c54?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="Third slide">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

        <?php
          $sql = "SELECT * FROM `findresearch`"; 
          $result = $conn->query($sql);
        ?>
    <!-- /.card-header -->
    <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <h5 class="card-title">งานวิจัยที่เผยแพร่</h5>
            <tr>
            <th scope="col">#</th>
                <th scope="col">ผู้วิจัย</th>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">สังกัด</th>
                <th scope="col">ปีเผยแพร่</th>
                <th scope="col">งานวิจัย</th>
                <th scope="col">หลักฐานการเผยแพร่</th>
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
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['art_tit']; ?></td>
                  <td><?php echo $row['aff']; ?></td>
                  <td><?php echo $row['year']; ?></td>
                  <!-- <td><?php echo $row['abs_down']; ?></td> -->
                  <td><a href="<?php echo $row['abs_down']; ?>"><img class="logo" src="img/folder.png" height="50" alt="Logo"></a></td>
                  <td><a href="<?php echo $row['pub_re']; ?>"><img class="logo" src="img/file.png" height="50" alt="Logo"></a></td>
                  
                  <!-- <td><a href="<?php echo $row['abs_down']; ?>">Download</a></td> -->
                <!-- <td>
                  <a href="form-create.php" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> ยืนยัน
                  </a> 
                </td> -->
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>