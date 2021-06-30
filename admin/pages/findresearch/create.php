<?php include_once('../authen.php') ?> 
<?php
if (isset($_POST['submit'])) {
    // $sql_check_id_village = "SELECT * FROM `project_eresearch` WHERE `id_village` = '" . $_POST['id_village'] . "' ";
    // $check_id_village = $conn->query($sql_check_id_village);
    // if (!$check_id_village->num_rows) {
        // $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO `findresearch` (`name`, `art_tit`, `aff`, `year`, `abs_down`, `pub_re`) 
                    VALUES ('" . $_POST['name'] . "', 
                            '" . $_POST['art_tit'] . "', 
                            '" . $_POST['aff'] . "', 
                            '" . $_POST['year'] . "', 
                            '" . $_POST['abs_down'] . "',
                            '" . $_POST['pub_re'] . "');"; 

         $result = $conn->query($sql);
         if ($result) {
             echo '<script> alert("Finished Creating!")</script>';
             header('Refresh:0; url=index.php');
         } else {
             echo '<script> alert("Creating Error!")</script>';
             header('Refresh:0; url=index.php');
         }
    //  } else {
    //      echo '<script> alert("Username is already exists!")</script>';
    //      header('Refresh:0; url=form-create.php');
    //  }
 } else {
     header('Refresh:0; url=index.php');
 }
 
 ?>
