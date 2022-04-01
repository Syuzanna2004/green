
<?php include('partials/menu.php'); ?>

            <div class="main-content">
            <div class="wrapper">

                    <?php
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }           
            ?>
            
                <br/><br/>
                <div class="col-4 text-center">

                    <?php
                    $sql = "SELECT * FROM tbl_category";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count;?></h1>
                    <br />
                    Категории
                </div>
                <div class="col-4 text-center">
                    <?php
                    $sql2 = "SELECT * FROM tbl_plants";
                    $res2 = mysqli_query($conn, $sql2);
                    $count2 = mysqli_num_rows($res2);
                    ?>
                    <h1><?php echo $count2;?></h1>
                    <br />
                    Растения
                </div>
                <div class="col-4 text-center">
                <?php
                    $sql3 = "SELECT * FROM tbl_order";
                    $res3 = mysqli_query($conn, $sql3);
                    $count3 = mysqli_num_rows($res3);
                    ?>
                    <h1><?php echo $count3;?></h1>
                    <br />
                    Всего заказов
                </div>
                <div class="col-4 text-center">
                <?php
                    $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                    $res4 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_fetch_assoc($res4);

                    $total_revenue = $row4['Total'];

                    ?>
                    <h1><?php echo $total_revenue;?>Руб.</h1>
                    <br />
                    Полученный доход
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>

        <?php include('partials/footer.php'); ?>

    </body>
</html>