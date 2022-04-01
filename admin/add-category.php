<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Добавить категорию</h1>
        <br/><br/>

        <?php
        if(isset($_SESSION['add'])){

            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['upload'])){

            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>

        <br/><br/>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Заголовок: </td>
                    <td><input type="text" name="title" placeholder="Название категории"></td>
                </tr>
                <tr>
                    <td>Название категории: </td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td>Избранное: </td>
                    <td>
                    <input type="radio" name="featured" value="Yes">Да
                    <input type="radio" name="featured" value="Yes">Нет
                </td>
                </tr>
                <tr>
                    <td>Активно: </td>
                    <td>
                        <input type="radio" name="active" value="Yes">Да
                        <input type="radio" name="active" value="No">Нет
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Добавить категорию" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $title = $_POST['title'];

            if(isset($_POST['featured'])){
                $featured = $_POST['featured'];
            }else{
                $featured = "No";
            }

            if(isset($_POST['active'])){
                $active = $_POST['active'];
            }else{
                $active = "No";
            }

            if(isset($_FILES['image']['name'])){
                $image_name= $_FILES['image']['name'];

                if($image_name != ""){

            

                    $ext = end(explode('.', $image_name));

                    $image_name = "Plants_Category_".rand(000, 999).'.'.$ext;


                    $source_path = $_FILES['image']['tmp_name'];

                    $destination_path = "../images/category/".$image_name;

                    $upload = move_uploaded_file($source_path, $destination_path);

                    if($upload==false){
                        $_SESSION['upload'] = "<div class='error'>Не удалось загрузить изображение</div>";
                        header('location:'.SITEURL.'admin/add-category.php');
                        die();
                    }

                }
            }else{
                $image_name="";
            }
        
            $sql = "INSERT INTO tbl_category SET
            title = '$title',
            image_name='$image_name',
            featured = '$featured',
            active = '$active'
            ";
        
            
            $res = mysqli_query($conn, $sql);
        
            if($res==TRUE){
               
                $_SESSION['add'] = "<div class='success'>Категория успешно добавлена</div>";
        
                header("location:".SITEURL.'admin/manage-category.php');
            } else {
                $_SESSION['add'] = "<div class='error'>Не удалось добавить категорию</div>";
        
                header("location:".SITEURL.'admin/add-category.php');
            }
        
        }
        ?>
    </div>
</div>

<?php include('partials/footer.php');?>