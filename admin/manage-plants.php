<?php include('partials/menu.php');?>

<div class="main-content">
<div class="wrapper">
    <h1>Управление растениями<h1>
    <br /><br />
        <a href="<?php echo SITEURL; ?>admin/add-plants.php" class="btn-primary">Добавить растения</a>
        <br /><br /><br />

        <?php
            if(isset($_SESSION['add'])){
                echo  $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['delete'])){
                echo  $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['upload'])){
                echo  $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
            if(isset($_SESSION['unauthorize'])){
                echo  $_SESSION['unauthorize'];
                unset($_SESSION['unauthorize']);
            }
            if(isset($_SESSION['update'])){
                echo  $_SESSION['update'];
                unset($_SESSION['update']);
            }
        ?>
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Заголовок</th>
                <th>Цена</th>
                <th>Изображение</th>
                <th>ID категории</th>
                <th>Избранное</th>
                <th>Активный</th>
                <th>Действия</th>
            </tr>

            <?php
            $sql = "SELECT * FROM tbl_plants";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $sn=1;

            if($count>0){
                while($row=mysqli_fetch_assoc($res)){
                    $id= $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    $category_id = $row['category_id'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                    ?>

                        <tr>
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $title?></td>
                            <td>$<?php echo $price?></td>
                            <td>
                                <?php 
                                    if($image_name==""){
                                        echo "<div class='error'>Image not Added</div>";
                                    } else{
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/plants/<?php echo $image_name; ?>" width="100px">
                                        <?php
                                    }
                                ?>
                            </td>
                            <td><?php echo $category_id; ?></td>
                            <td><?php echo $featured; ?></td>
                            <td><?php echo $active; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-plants.php?id=<?php echo $id;?>" class="btn-secondary">Редактировать</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-plants.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">Удалить растения</a>
                            </td>
                        </tr>

                    <?php
                }
            }else{
                echo "<tr><td colspan='7' class='error'>Растения еще не добавлены</td></tr>";
            }
            ?>

        </table>
</div>
</div>

<?php include('partials/footer.php');?>