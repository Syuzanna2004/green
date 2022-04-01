<?php
    include('../config/constants.php');

    if(isset($_GET['id']) && isset($_GET['image_name'])){
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != ""){
            $path = "../images/plants/".$image_name;
            $remove = unlink($path);
            if($remove==false){
                $_SESSION['upload'] = "<div class='error'>Не удалось удалить файл изображения</div>";
                header('location:'.SITEURL.'admin/manage-plants.php');
                die();
            }
        }

        $sql = "DELETE FROM tbl_plants WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res==true){
            $_SESSION['delete'] = "<div class='success'>Растения успешно удалены</div>";
            header('location:'.SITEURL.'admin/manage-plants.php');
        }else{
            $_SESSION['delete'] = "<div class='error'>Не удалось удалить растения</div>";
            header('location:'.SITEURL.'admin/manage-plants.php');
        }

    }else{
        $_SESSION['unauthorize'] = "<div class='error'>Не авторизованный доступ</div>";
        header('location:'.SITEURL.'admin/manage-plants.php');
    }
?>