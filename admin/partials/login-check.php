<?php 
if(!isset($_SESSION['user'])){
    $_SESSION['no-login-message'] = "<div class='error text-center'>Пожалуйста, войдите, чтобы получить доступ к панели администратора.</div>";
    header('location:'.SITEURL.'admin/login.php');
}
?>
