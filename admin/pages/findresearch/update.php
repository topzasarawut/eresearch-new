<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $sql = "UPDATE `findresearch`
                SET `name` = '".$_POST['name']."',
                `art_tit` = '".$_POST['art_tit']."',
                `aff` = '".$_POST['aff']."', 
                `year` = '".$_POST['year']."', 
                `abs_down` = '".$_POST['abs_down']."',
                `pub_re` = '".$_POST['pub_re']."'
                WHERE `id` = '".$_POST['id']."';";

        $result = $conn->query($sql);
        if($result){
            echo '<script> alert("Finished Updating!")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Update Error!")</script>'; 
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Refresh:0; url=index.php');
    }

?>