<?php include_once('../authen.php') ?>
<?php 
    if(isset($_POST['submit'])){
        $sql = "UPDATE `project_eresearch` 
                SET `year` = '".$_POST['year']."',
                `sb_sg` = '".$_POST['sb_sg']."',
                `pn` = '".$_POST['pn']."', 
                `idp` = '".$_POST['idp']."', 
                `pn1` = '".$_POST['pn1']."',
                `r1` = '".$_POST['r1']."',
                `rt1` = '".$_POST['rt1']."',
                `ra1` = '".$_POST['ra1']."',
                `ab1` = '".$_POST['ab1']."',
                `b1_1` = '".$_POST['b1_1']."',
                `b1_2` = '".$_POST['b1_2']."',
                `b1_3` = '".$_POST['b1_3']."',
                `st1` = '".$_POST['st1']."',
                `pn2` = '".$_POST['pn2']."',
                `r2` = '".$_POST['r2']."',
                `rt2` = '".$_POST['rt2']."',
                `ra2` = '".$_POST['ra2']."',
                `ab2` = '".$_POST['ab2']."',
                `b2_1` = '".$_POST['b2_1']."',
                `b2_2` = '".$_POST['b2_2']."',
                `b2_3` = '".$_POST['b2_3']."',
                `st2` = '".$_POST['st2']."',
                `pn3` = '".$_POST['pn3']."',
                `r3` = '".$_POST['r3']."',
                `rt3` = '".$_POST['rt3']."',
                `ra3` = '".$_POST['ra3']."',
                `ab3` = '".$_POST['ab3']."',
                `b3_1` = '".$_POST['b3_1']."',
                `b3_2` = '".$_POST['b3_2']."',
                `b3_3` = '".$_POST['b3_3']."',
                `st3` = '".$_POST['st3']."',
                `pn4` = '".$_POST['pn4']."',
                `r4` = '".$_POST['r4']."',
                `rt4` = '".$_POST['rt4']."',
                `ra4` = '".$_POST['ra4']."',
                `ab4` = '".$_POST['ab4']."',
                `b4_1` = '".$_POST['b4_1']."',
                `b4_2` = '".$_POST['b4_2']."',
                `b4_3` = '".$_POST['b4_3']."',
                `st4` = '".$_POST['st4']."',
                `pn5` = '".$_POST['pn5']."',
                `r5` = '".$_POST['r5']."',
                `rt5` = '".$_POST['rt5']."',
                `ra5` = '".$_POST['ra5']."',
                `ab5` = '".$_POST['ab5']."',
                `b5_1` = '".$_POST['b5_1']."',
                `b5_2` = '".$_POST['b5_2']."',
                `b5_3` = '".$_POST['b5_3']."',
                `st5` = '".$_POST['st5']."'
                WHERE `id` = '".$_POST['id']."';";

        $result = $conn->query($sql);
        if($result){
            echo '<script> alert("Finished Updating!")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Finished Updating**!")</script>'; 
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Refresh:0; url=index.php');
    }

?>