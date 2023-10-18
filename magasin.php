<!-- Voici le code pour la page magasin.php -->

<?php
require_once __DIR__ . '/Partials/head.php';
require_once __DIR__ . '/Partials/nav.php';
?>


    <!-- <h2>Notre magasin Sneakers House à Créteil</h2>
    <a class="nav-link" href="index.php"> Retour à la page accueil</a> -->
    <div class="container d-flex flex-column  flex-md-row justify-content-around align-items-center">
        <div class="magasin-text ">
            <h1>Nos coordonnées</h1>
            <p>Adresse : 70 avenue du Général de Gaulle 94000 Créteil</p>
            <p>Service client : 01 43 61 70 53 / 06 71 93 45 23</p>

            <a href="contact.php" class="magasin-link">Formulaire de contact</a>
        </div>
        <div class="magasin-iframe">
            <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59456.639503416365!2d2.398715759278471!3d48.80790516356833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67335919f124f%3A0xa684a07a72b3ab0!2s70%20Av.%20du%20G%C3%A9n%C3%A9ral%20de%20Gaulle%2C%2094000%20Cr%C3%A9teil!5e0!3m2!1sfr!2sfr!4v1682514837410!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>

</body>

<?php
require_once __DIR__ . '/Partials/footer.php';
?>

</html>

