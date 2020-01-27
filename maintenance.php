<?php include("options.php");
if($MAINTENANCE===0){
    header("Location: index.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/maintenance.css">
    <title>Steeve Henrard - Maintenance</title>
</head>
<body>
<header>
<div class="container">
    <div class="row oups">
        <div class="col-12 col-md-4 offset-md-4 text-center">
            <h1>Oups!</h1>
            <h4>Le site est en maintenance.</h4>
        </div>
    </div>
</div>
</header>

<footer>
</footer>
</body>
</html>