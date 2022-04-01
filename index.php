<?php include('config/constants.php');?>
<?php
    if(isset($_SESSION['order'])){
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.min.css?_v=20220324154441">
	<title>Главная</title>
</head>
<style>
.btn{
  padding: 1%;
  border: none;
  font-size: 1rem;
  border-radius: 5px;
}
.btn-primary{
  background-color: #178C14;
  color: white;
  cursor: pointer;
}
.btn-primary:hover{
  color: white;
  background-color: #1db81b;
}

	</style>
<body>
	<div class="wrapper">
		<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__top">
                <a class="logo2" href="#">LOGO</a>
                <a class="logo1" href="#">
                    <img src="img/Logotip.svg" alt="">
                </a>
                <div class="basket-social">
                    <a class="basket" href="#">
                        <img src="img/basket.svg" alt="">
                    </a>
                    <a class="whatsapp" href="https://www.whatsapp.com/?lang=ru">
                        <img src="img/whatsapp.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="header__menu">
                <div class="burger">
                    <span class="burger__line burger__line-first"></span>
                    <span class="burger__line burger__line-second"></span>
                    <span class="burger__line burger__line-third"></span>
                    <span class="burger__line burger__line-fourth"></span>
                </div>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">Каталог</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">Выгодные предложения</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">Рекомендации</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">Наши приемущества</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
		<main class="main">
			<div class="for-garden">
				<div class="for-garden__inner">
					<h2 class="for-garden__subtitle subtitle-prev">10 лет на рынке</h2>
					<h2 class="for-garden__title">Растения</h2>
					<span class="for-garden__title--common">для Вашего сада</span>
					<button class="for-garden__button button" type="submit">Перейти в каталог</button>
				</div>
			</div>
			<div class="discounts" id="offers">
				<div class="container">
					<div class="discounts__inner">
						<h2 class="discounts__title title">Выгодные предложения</h2>
						<p class="discounts__text">Не упустите регулярные скидки, акции и выгодные предложения.
							Акции переодически обновляются. Не пропустите</p>
						<div class="discounts__sets">
							<div class="discounts__set discounts__set1">
								<a href="#">
									<picture><source srcset="img/set1.webp" type="image/webp"><img class="discounts__images discounts__images--1" src="img/set1.jpg" alt=""></picture>
								</a>
							</div>
							<div class="discounts__set discounts__set2">
								<a href="#">
									<picture><source srcset="img/set2.webp" type="image/webp"><img class="discounts__images discounts__images--2" src="img/set2.jpg" alt=""></picture>
								</a>
							</div>
							<div class="discounts__set discounts__set4">
								<a href="#">
									<picture><source srcset="img/set3.webp" type="image/webp"><img class="discounts__images discounts__images--3" src="img/set3.jpg" alt=""></picture>
								</a>
							</div>
							<div class="discounts__set discounts__set3">
								<a href="#">
									<picture><source srcset="img/set4.webp" type="image/webp"><img class="discounts__images discounts__images--4" src="img/set4.jpg" alt=""></picture>
								</a>
							</div>
							<div class="discounts__set discounts__set5">
								<a href="#">
									<picture><source srcset="img/set5.webp" type="image/webp"><img class="discounts__images discounts__images--5" src="img/set5.jpg" alt=""></picture>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="rec-container" id="recommendations">
				<div class="recommendation-slider">
					<div class="recommendation-slider__line">
						<div class="recommendation-slider__inner">
							<picture class="recommendation-slider__img">
								<source media="(min-width: 1024px)" srcset="img/cactus.png">
								<source media="(min-width: 515px)" srcset="img/cactus2.png">
								<source media="(min-width: 0px)" srcset="img/cactus3.png">
								<img src="img/cactus.png" alt="">
							</picture>
							<div class="recommendation-slider__item">
								<p class="recommendation-slider__subtitle subtitle-prev">10 лет на рынке</p>
								<p class="recommendation-slider__title">Первая рекомендация</p>
								<p class="recommendation-slider__text">Высокотехнологичная концепция общественного уклада играет определяющее значение для переосмысления внешнеэкономических политик. Не следует, однако, забывать, что синтетическое тестирование однозначно фиксирует необходимость соответствующих условий активизации.</p>
							  <button class="recommendation-slider__button button">подробнее</button>
							</div>
						</div>
						<div class="recommendation-slider__inner">
							<picture class="recommendation-slider__img">
								<source media="(min-width: 1024px)" srcset="img/cactus.png">
								<source media="(min-width: 515px)" srcset="img/cactus2.png">
								<source media="(min-width: 0px)" srcset="img/cactus3.png">
								<img src="img/cactus.png" alt="">
							</picture>
							<div class="recommendation-slider__item">
								<p class="recommendation-slider__subtitle subtitle-prev">10 лет на рынке</p>
								<p class="recommendation-slider__title">Первая рекомендация</p>
								<p class="recommendation-slider__text">Высокотехнологичная концепция общественного уклада играет определяющее значение для переосмысления внешнеэкономических политик. Не следует, однако, забывать, что синтетическое тестирование однозначно фиксирует необходимость соответствующих условий активизации.</p>
							  <button class="recommendation-slider__button button">подробнее</button>
							</div>
						</div>
						<div class="recommendation-slider__inner">
							<picture class="recommendation-slider__img">
								<source media="(min-width: 1024px)" srcset="img/cactus.png">
								<source media="(min-width: 515px)" srcset="img/cactus2.png">
								<source media="(min-width: 0px)" srcset="img/cactus3.png">
								<img src="img/cactus.png" alt="">
							</picture>
							<div class="recommendation-slider__item">
								<p class="recommendation-slider__subtitle subtitle-prev">10 лет на рынке</p>
								<p class="recommendation-slider__title">Первая рекомендация</p>
								<p class="recommendation-slider__text">Высокотехнологичная концепция общественного уклада играет определяющее значение для переосмысления внешнеэкономических политик. Не следует, однако, забывать, что синтетическое тестирование однозначно фиксирует необходимость соответствующих условий активизации.</p>
							  <button class="recommendation-slider__button button">подробнее</button>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="catalog" id="catalog">
				<div class="container">
					<div class="catalog__inner">
						<div class="catalog__title">
							<a class="catalog__title-item" href="#tab-1">ЦВЕТЫ</a>
							<a class="catalog__title-item" href="#tab-2">САДОВЫЕ</a>
							<a class="catalog__title-item" href="#tab-3">ДЛЯ ОГОРОДА</a>
						</div>
						<div class="catalog__content">
						<?php
    if(isset($_SESSION['order'])){
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
    ?>

							<div class="catalog__content-item" id="tab-1">
								<?php
									$sql2="SELECT * FROM tbl_plants WHERE active='Yes' AND featured='Yes' AND category_id='1' LIMIT 6";
									
									$res2 = mysqli_query($conn, $sql2);
									$count2 = mysqli_num_rows($res2);
						
									if($count2>0){
										while($row=mysqli_fetch_assoc($res2)){
											$id = $row['id'];
											$title = $row['title'];
											$price = $row['price'];
											$description = $row['description'];
											$image_name = $row['image_name'];
											?>
											<div class="catalog__content-product">
													<?php
											
													if($image_name==""){
														echo "<div class='error'>Image not Available</div>";
												}else{
														?>
														<picture><source srcset="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" type="image/webp"><img src="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" alt="" class="catalog__content-img"></picture>
														<?php
													}
													?>
													<p class="catalog__content-name"><?php echo $title; ?></p>
													<p class="catalog__content-price"><?php echo $price;?></p>

													<a href="#">
																<p class="catalog__content-info"><?php echo $description;?></p>
															</a>	
													<br>
													<a href="<?php echo SITEURL; ?>order.php?plants_id=<?php echo $id; ?>" class="btn btn-primary">Заказать</a>
													
                        					</div>
											<?php
										}
									}else{
										echo "<div class='error'>Растения недоступны</div>";
									}
									?>
								
							</div>


							<div class="catalog__content-item" id="tab-2">
							<?php
									$sql2="SELECT * FROM tbl_plants WHERE active='Yes' AND featured='Yes' AND category_id='2' LIMIT 6";
									
									$res2 = mysqli_query($conn, $sql2);
									$count2 = mysqli_num_rows($res2);
						
									if($count2>0){
										while($row=mysqli_fetch_assoc($res2)){
											$id = $row['id'];
											$title = $row['title'];
											$price = $row['price'];
											$description = $row['description'];
											$image_name = $row['image_name'];
											?>
											<div class="catalog__content-product">
													<?php
											
													if($image_name==""){
														echo "<div class='error'>Image not Available</div>";
												}else{
														?>
														<picture><source srcset="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" type="image/webp"><img src="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" alt="" class="catalog__content-img"></picture>
														<?php
													}
													?>
													<p class="catalog__content-name"><?php echo $title; ?></p>
													<p class="catalog__content-price"><?php echo $price;?></p>

													<a href="#">
																<p class="catalog__content-info"><?php echo $description;?></p>
															</a>	
													<br>
													<a href="<?php echo SITEURL; ?>order.php?plants_id=<?php echo $id; ?>" class="btn btn-primary">Заказать</a>
													
                        					</div>
											<?php
										}
									}else{
										echo "<div class='error'>Растения недоступны</div>";
									}
									?>
							</div>


							<div class="catalog__content-item" id="tab-3">
							<?php
									$sql2="SELECT * FROM tbl_plants WHERE active='Yes' AND featured='Yes' AND category_id='3' LIMIT 6";
									
									$res2 = mysqli_query($conn, $sql2);
									$count2 = mysqli_num_rows($res2);
						
									if($count2>0){
										while($row=mysqli_fetch_assoc($res2)){
											$id = $row['id'];
											$title = $row['title'];
											$price = $row['price'];
											$description = $row['description'];
											$image_name = $row['image_name'];
											?>
											<div class="catalog__content-product">
													<?php
											
													if($image_name==""){
														echo "<div class='error'>Image not Available</div>";
												}else{
														?>
														<picture><source srcset="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" type="image/webp"><img src="<?php echo SITEURL;?>images/plants/<?php echo $image_name; ?>" alt="" class="catalog__content-img"></picture>
														<?php
													}
													?>
													<p class="catalog__content-name"><?php echo $title; ?></p>
													<p class="catalog__content-price"><?php echo $price;?></p>

													<a href="#">
																<p class="catalog__content-info"><?php echo $description;?></p>
															</a>	
													<br>
													<a href="<?php echo SITEURL; ?>order.php?plants_id=<?php echo $id; ?>" class="btn btn-primary">Заказать</a>
													
                        					</div>
											<?php
										}
									}else{
										echo "<div class='error'>Растения недоступны</div>";
									}
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="advantages" id="advantages">
				<div class="container">
					<div class="advantages__inner">
						<div class="advantages__item">
							<div class="advantages__content">
								<div class="advantages__title advantages__title--1">Бесплатная доставка</div>
								<div class="advantages__text text">Давайте разбираться: преступность</div>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__content">
								<div class="advantages__title advantages__title--2">Богатый опыт</div>
								<div class="advantages__text text">Давайте разбираться: преступность</div>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__content">
								<div class="advantages__title advantages__title--3">Удобная оплата</div>
								<div class="advantages__text text">Давайте разбираться: преступность</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>



		<footer class="footer">
	<div class="container">
		<div class="footer__inner">
			<div class="footer-contact">
				<a class="footer-contact--logo" href="#">
					<img src="img/Logotip.svg" alt="">
				</a>
				<ul class="footer-contact__list">
					<li class="footer-contact__item">
						<a class="footer-contact__link footer-contact__link--address" href="#">г. Самара, ул. Уличная, дом 88</a>
					</li>
					<li class="footer-contact__item">
						<a class="footer-contact__link footer-contact__link--phone" href="tel:+89242828832">888-88-88</a>
					</li>
					<li class="footer-contact__item">
						<a class="footer-contact__link footer-contact__link--mail" href="#">saleofplants@mail.ru</a>
					</li>
				</ul>
			</div>
			<div class="footer-about">
				<h6 class="footer-about__title footer__title">О компании</h6>
				<div class="footer-border"></div>
				<nav class="footer-menu">
					<ul class="footer-menu__list">
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="#">Каталог</a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="#">Выгодные предложения</a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="#">Рекомендации</a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="#">Наши приемущества</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="footer-notifications">
				<h6 class="footer-notifications__title footer__title">Рассылка</h6>
				<div class="footer-border"></div>
				<p class="footer-notifications__text">Получайте уведомления о скидках, акциях новых
					товарах и выгодных предложениях.
				</p>
				<form class="footer-form">
					<div class="footer-form__container">
						<input class="footer-form__input" type="email" placeholder="Введите Email">
						<button class="footer-form__button" type="submit"></button>
					</div>
				</form>
			</div>
			<div class="footer-social">
				<h6 class="footer-social__title footer__title">Соц. сети</h6>
				<div class="footer-border"></div>
				<p class="footer-social__text">Следите за нами.</p>
				<ul class="footer-social__list">
					<li class="footer-social__item">
						<a class="footer-social__link" href="#">
							<img src="img/instagram.svg" alt="">
						</a>
					</li>
					<li class="footer-social__item">
						<a class="footer-social__link" href="#">
							<img src="img/twitter.svg" alt="">
						</a>
					</li>
					<li class="footer-social__item">
						<a class="footer-social__link" href="#">
							<img src="img/facebook.svg" alt="">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
		<script src="js/app.min.js?_v=20220324154441"></script>
	</div>
</body>

</html>	