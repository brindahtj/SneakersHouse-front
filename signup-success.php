<?php 
ob_start();
require_once 'Database/db-pdoSH.php';
require_once 'functions.php';
require_once 'Partials/head.php';
require_once 'Partials/nav.php';


if (!empty($_GET['token'])) {
    $token=$_GET['token'];
    $checkToken=inDB($pdo,'token',$token);

    if($checkToken){
    header('Location: signup-confirm.php');
    ob_end_flush();
    }
}


?>

<div class="container-fluid size-page mt-5">
    <div class="row">
        <div class="col"></div>
        <div class="col-4 col-md-6 col-xl-6 mb-3 ">
      <h2>Inscription réussie ! Un mail de confirmation vous a été envoyé .</h2>
        </div>
        <div class="col"></div>
        
    </div>

</div>




<?php 
    require_once __DIR__.'\Partials\footer.php';
    ?>
