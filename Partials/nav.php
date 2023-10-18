
</head>

<?php require_once "Controllers/countCtrl.php";?>

<?php if( $_SERVER['REQUEST_URI']=='/contact.php'|| $_SERVER['REQUEST_URI']=='/login.php'|| $_SERVER['REQUEST_URI']=='/signup.php'|| $_SERVER['REQUEST_URI']=='/forgotpassword.php' ):
?>

<body class="bg-orange">
<?php elseif(!empty($_SESSION)): ?>
    
    <body class="bg-light">
<?php else: ?>

<body class="bg-light">

<?php endif ?>
<header class="bg-light d-flex justify-content-center container-fluid">
        
        <ul>
           <a  class="nav-link active " href="index.php"><img src="img/logo/Logo.png" alt="Logo de la marque" id="logo" class="mr-5 logo" ></a>
         </ul>
             
 
     
     </header>
     
<nav class=" navbar navbar-expand-lg bg-body shadow-sm sticky-top mb-2 py-1 ">
    <a class="navbar-brand" href="#"></a>
    <div class=" navbar-toolbar d-flex align-items-center  order-lg-3">
    
        <button id="respBtn" class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <ul class=" navbar-nav mb-0 ">
            <li class=" padtop-2px me-1">
                                        
                    <button class="nav-link btn " type="button" data-bs-toggle="collapse" data-bs-target="#searchbar"  aria-expanded="false" aria-controls="searchbar"> <i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
            </li> 
            <li>
                <div class=" nav-item d-flex ">
                    <span class="collapse collapse-horizontal " id="searchbar">
                        <input class="form-control me-1 inputform py-0 ps-2 search-bar bg-lightgrey"  type="search "style="width: 200px;" placeholder="Rechercher" aria-label="Search" >
                    </span>
                </div>  
            </li> 
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class=" container-fluid d-flex justify-content-between" id="justify-content-between">
            <div class="d-flex order-lg-1" id="">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"  id="sneakers" data-bs-toggle="dropdown" aria-expanded="false" id="">
                                    SNEAKERS
                                </a>
                                <ul class="dropdown-menu shadow-sm  opacity-75 " >
                                    <li><a class="dropdown-item" href="catalogue.php?filter=homme">HOMME</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="catalogue.php?filter=femme">FEMME</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="catalogue.php?filter=marques">MARQUES</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdownjs" href="#" role="button" id="exclu" data-bs-toggle="dropdown" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" aria-expanded="false" id="dropdown">
                                    EXCLUSIVITES
                                </a>
                                <ul class="dropdown-menu shadow-sm  opacity-75  " >
                                    <li><a class="dropdown-item" href="catalogue.php?filter=new">NOUVEAUTE</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item"  href="catalogue.php?filter=promo">PROMO </a></li>
                                </ul>
                            </li>
                        </ul>
            </div> 
            <div class="d-flex order-lg-2 ">
                        <ul class="navbar-nav mb-0">     
                            <li class="nav-item padtop-2px me-3">
                            <a class="nav-link " href="magasin.php"><i class="fa-solid fa-location-dot fa-lg"></i>  MAGASIN </a>
                            </li>
                            <li class="nav-item padtop-2px me-3">
                            <?php if(!empty($_SESSION)): ?>

                                <a class="nav-link" href="profil.php"><i class="fa-solid fa-circle-user fa-lg"></i> MON COMPTE</a>

                            <?php else :?>

                                <a class="nav-link" href="login.php"> <i class="fa-solid fa-circle-user fa-lg"></i> MON COMPTE</a>

                            <?php endif ?>
                            </li>
                            <?php 
                         if(!empty($_SESSION) && $_SESSION['user']['admin']==1): ?>
                            <li class="nav-item padtop-2px me-3">
                                <a class="nav-link" href="admin.php"> <i class="fa-solid fa-circle-user fa-lg"></i> ADMIN</a>
                            </li>
                            <?php else :?>

                            
                            <?php endif ?>
                            
                            <li class="nav-item padtop-2px ">
                                <a class="nav-link" href="cart.php"><i class="fa-solid fa-bag-shopping fa-lg"></i>
                                PANIER </a>
                               
                            </li> 
                            <li>
                                <?php  if(!empty($_SESSION)):?>
                                <span class=" position-absolute top-10 start-75 translate-middle badge bg-danger rounded-pill"><?= $count['count(id_produits)'] ?></span> 
                                    
                                <?php else: ?>

                                <?php endif?>
                            </li>
                        
                            
                        </ul>
            </div>
        </div>
           
    </div>
</nav>


    
