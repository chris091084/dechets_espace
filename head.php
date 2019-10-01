<?php  var_dump($_SERVER['REQUEST_URI']);

$title = $_SERVER['REQUEST_URI'];

    $title=rtrim ($title,".php"  );
    $title=ltrim($title, "/");
    $title=str_replace ("_", " ",$title);

echo $title;

/// cette partie permet de récupérer le noms du fichier en title en enlevant le.php et les /

;?>



<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home_page.css">
    <link rel="stylesheet" href="popup.css">
</head>

