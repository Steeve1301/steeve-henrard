<?php include("options.php");
if($MAINTENANCE===1){
    header("Location: maintenance.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jeune développeur en formation chez BeCode. HTML5/CSS3, JavaScript, PHP/MySql">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Steeve Henrard - Web Developer Junior</title>
</head>
<body>
<?php include("header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 text-center navme">
            <h1>Steeve Henrard</h1>
            <h4>Junior Web Developer</h4>
        </div>
    </div>
    </div>

<div class="row">
    <section class="col-12 col-md-4 text-center about">
        <h2 class="text-center col-12 col-md-12">A propos de moi</h2>
        <article class="col-12 col-md-12">
            <h3>Le développement web, une passion.</h3>
            <p>
                Passionné par le code depuis trés jeune, je me tiens à votre disposition pour toutes vos demandes de site web.
                de l'HTML/CSS au Javascript en passant par PHP, je me tiens prêt à réalisé vos sites web sur mesure! 
                Quoi de mieux, que de passer par un professionel passionné pour effectuer cette tâche !
            </p>
        </article>
        <!-- <img src="assets/css/img/about.png" alt="Ordinateur"> -->
    </section>

    <section id="skills" class="col-12 col-md-6 offset-md-1">
        <h3 style="display:none">Skills</h3>
        <article class="col-12 col-md-12">
            <h2 class="col-12 col-md-12 text-center">Mes compétences</h2>
            <ul>
                <li>
                    Création de site web en HTML/CSS responsive.
                </li>
                <li>
                    Proposition de maquette pour votre site web.
                </li>
                <li>
                    Dynamisation des pages avec JavaScript/PHP
                </li>
                <li>
                    Maintenance de votre site web.
                </li>
                <li>
                    Création de design pour votre site.
                </li>
            </ul>
            <img src="assets/css/img/coding.png" alt="In Code We Trust" class="col-6 offset-3">
        </article>
    </section>
</div>


<section class="col-12 col-md-12 text-center lastcreat">

        <div class="row">        
            <h2 class="col-12 col-md-12 text-center">Portfolio:</h2>
            <article class="col-12 col-md-2 offset-md-3">
                <h3>Steeve Henrard v.1.0</h3>
                <figure>
                    <img src="assets/css/img/site.png" alt="Mon site">
                    <figcaption class="text-white">Janvier 2020</figcaption>
                </figure>
            </article>
            <article class="col-12 col-md-2">
                <h3>Steeve Henrard v.1.0</h3>
                <figure>
                    <img src="assets/css/img/site.png" alt="Mon site">
                    <figcaption class="text-white">Janvier 2020</figcaption>
                </figure>
            </article>
            <article class="col-12 col-md-2">
                <h3>Steeve Henrard v.1.0</h3>
                <figure>
                    <img src="assets/css/img/site.png" alt="Mon site">
                    <figcaption class="text-white">Janvier 2020</figcaption>
                </figure>
            </article>
        </div>
    </section>


<?php include("footer.php"); ?>

<script src="assets/js/script.js"></script>
 

</body>
</html>