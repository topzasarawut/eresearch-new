<?php include_once('../authen.php') ?> 
<?php
// echo $_POST['year'];
// echo $_POST['sb_sg'];
// echo $_POST['pn'];
// echo $_POST['idp'];
// echo $_POST['pn1'];
// echo $_POST['r1'];
// echo $_POST['rt1'];
// echo $_POST['ra1'];
// echo $_POST['ab1'];
// echo $_POST['b1_1'];
// echo $_POST['b1_2'];
// echo $_POST['b1_3'];
// echo $_POST['st1'];
// echo $_POST['pn2'];
// echo $_POST['r2'];
// exit;
if (isset($_POST['submit'])) {
    $sql_check_idp = "SELECT * FROM `project_eresearch` WHERE `idp` = '" . $_POST['idp'] . "' ";
    $check_idp = $conn->query($sql_check_idp);
    if (!$check_idp->num_rows) {
        
        $sql = "INSERT INTO `project_eresearch` (`year`, `sb_sg`, `pn`, `idp`, `pn1`, `r1`, `rt1`, `ra1`,
                                                `ab1`, `b1_1`, `b1_2`, `b1_3`, `st1`, `pn2`, `r2`, `rt2`, `ra2`,
                                                `ab2`, `b2_1`, `b2_2`, `b2_3`, `st2`, `pn3`, `r3`, `rt3`, `ra3`,
                                                `ab3`, `b3_1`, `b3_2`, `b3_3`, `st3`, `pn4`, `r4`, `rt4`, `ra4`,
                                                `ab4`, `b4_1`, `b4_2`, `b4_3`, `st4`, `pn5`, `r5`, `rt5`, `ra5`, 
                                                `ab5`, `b5_1`, `b5_2`, `b5_3`, `st5`) 
                    VALUES ('" . $_POST['year'] . "',
                            '" . $_POST['sb_sg'] . "',
                            '" . $_POST['pn'] . "',
                            '" . $_POST['idp'] . "',
                            '" . $_POST['pn1'] . "', 
                            '" . $_POST['r1'] . "', 
                            '" . $_POST['rt1'] . "',
                            '" . $_POST['ra1'] . "', 
                            '" . $_POST['ab1'] . "', 
                            '" . $_POST['b1_1'] . "', 
                            '" . $_POST['b1_2'] . "', 
                            '" . $_POST['b1_3'] . "', 
                            '" . $_POST['st1'] . "', 
                            '" . $_POST['pn2'] . "', 
                            '" . $_POST['r2'] . "', 
                            '" . $_POST['rt2'] . "', 
                            '" . $_POST['ra2'] . "', 
                            '" . $_POST['ab2'] . "', 
                            '" . $_POST['b2_1'] . "', 
                            '" . $_POST['b2_2'] . "', 
                            '" . $_POST['b2_3'] . "', 
                            '" . $_POST['st2'] . "', 
                            '" . $_POST['pn3'] . "', 
                            '" . $_POST['r3'] . "', 
                            '" . $_POST['rt3'] . "', 
                            '" . $_POST['ra3'] . "', 
                            '" . $_POST['ab3'] . "', 
                            '" . $_POST['b3_1'] . "', 
                            '" . $_POST['b3_2'] . "', 
                            '" . $_POST['b3_3'] . "', 
                            '" . $_POST['st3'] . "', 
                            '" . $_POST['pn4'] . "', 
                            '" . $_POST['r4'] . "', 
                            '" . $_POST['rt4'] . "', 
                            '" . $_POST['ra4'] . "', 
                            '" . $_POST['ab4'] . "', 
                            '" . $_POST['b4_1'] . "', 
                            '" . $_POST['b4_2'] . "', 
                            '" . $_POST['b4_3'] . "', 
                            '" . $_POST['st4'] . "', 
                            '" . $_POST['pn5'] . "', 
                            '" . $_POST['r5'] . "', 
                            '" . $_POST['rt5'] . "', 
                            '" . $_POST['ra5'] . "', 
                            '" . $_POST['ab5'] . "', 
                            '" . $_POST['b5_1'] . "', 
                            '" . $_POST['b5_2'] . "', 
                            '" . $_POST['b5_3'] . "', 
                            '" . $_POST['st5'] . "');";           
         $result = $conn->query($sql);

        // echo $result;
        // exit;

         if ($result) {
             echo '<script> alert("Finished Creating!")</script>';
             header('Refresh:0; url=index.php');
         } else {
             echo '<script> alert("Creating Error!")</script>';
             header('Refresh:0; url=index.php');
         }
     } else {
         echo '<script> alert("idp is already exists!")</script>';
         header('Refresh:0; url=form-create.php');
     }
 } else {
     header('Refresh:0; url=index.php');
 }
 
 ?>
