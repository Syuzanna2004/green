<?php include('partials-front/menu.php');?>

    <?php
    if(isset($_GET['plants_id'])){

        $plants_id = $_GET['plants_id'];
        
        $sql = "SELECT * FROM tbl_plants WHERE id=$plants_id";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if($count==1){

            $row = mysqli_fetch_assoc($res);
            $title = $row['title'];
            $price = $row['price'];
            $image_name = $row['image_name'];


        }else{
            header('location:'.SITEURL);
        }
    }else{
        header('location:'.SITEURL);
    }
    ?>

    <!-- plants sEARCH Section Starts Here -->
    <section class="plants-search">
        <div class="container">

            <form action="" method="POST" class="order">
                <fieldset>

                    <div class="plants-menu-img">
                        <?php
                        if($image_name==""){
                            echo "<div class='error'>Изображение не доступно</div>";
                        }else{
                            ?>
                            <img src="<?php echo SITEURL; ?>images/plants/<?php echo $image_name;?>" class="img-responsive img-curve">
                            
                            <?php
                        }
                        ?>
                    </div>
    
                    <div class="plants-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="plants" value="<?php echo $title; ?>">

                        <p class="plants-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                        
                        <div class="order-label">Количество</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <div class="order-label">Полное имя</div>
                    <input type="text" name="full-name" placeholder="Syuzanna" class="input-responsive" required>

                    <div class="order-label">Номер Карты</div>
                    <input type="tel" name="contact" placeholder="1234567890" class="input-responsive" required>

                    <div class="order-label">Эл. адрес</div>
                    <input type="email" name="email" placeholder="123@gmail.com" class="input-responsive" required>

                    <div class="order-label">Адрес</div>
                    <textarea name="address" rows="10" placeholder="123 / 123/ 123" class="input-responsive" required></textarea>

                    <div class="order-label"><b>Отправте деньги по номеру 0987654321.</b></div>
                    </br>
                    <input type="submit" name="submit" value="Подтвердите заказ" class="btn btn-primary">
                </fieldset>


            </form>

            <?php
            if(isset($_POST['submit'])){

                $plants = $_POST['plants'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];

                $total = $price * $qty;

                $order_date = date("Y-m-d h:i:sa");

                $status = "Ordered";

                $customer_name = $_POST['full-name'];
                $customer_contact = $_POST['contact'];
                $customer_email = $_POST['email'];
                $customer_address = $_POST['address'];

                $sql2 = "INSERT INTO tbl_order SET 
                        plants = '$plants',
                        price = '$price',
                        qty = '$qty',
                        total = '$total',
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                        ";


                        $res2 = mysqli_query($conn, $sql2);
                
                        if($res2==true)
                        {
                            $_SESSION['order'] = "<div class='success text-center'>Растения успешно заказаны</div>";
                            header('location:'.SITEURL.'order.php');
                        }
                        else
                        {
                            $_SESSION['order'] = "<div class='error text-center'>Не удалось заказать растения.</div>";
                            header('location:'.SITEURL);
                        }
            }
            ?>

        </div>
    </section>
    <!-- plants sEARCH Section Ends Here -->

<?php include('partials-front/footer.php');?>