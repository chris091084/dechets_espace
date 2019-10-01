<?php $page = $_SERVER['REQUEST_URI'];
var_dump($page);

?>


<?php

$menu=[
        'nos_action.php' => 'Nos actions',
        'kit.php'=> 'le kit du Nettoyeur',
        'contact.php' => 'Contact'


];

var_dump($menu);


//* fonction pour entrer les données  du tableau
function leMenu($test,$array){
    foreach ($array as $element=>$titre){
        if ($element === $test){
            return $titre;
        }
    }
}

echo leMenu('nos_action.php', $menu);





?>

<nav class="navbar grey_shadows_blur navbar-expand-lg navbar-dark bg-color">
				<a href="home_page.php" class="navbar-brand"><img src="assets/logo_unis-vert.png" alt="logo unis-vert"></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
						<span class="navbar-toggler-icon"></span>        
					</button>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="nos_action.php" <?php if ($page === "/nos_action.php") {echo "class='nav-link li ongletstat'";} else{echo "class='nav-link li'";} ?>><?php echo leMenu('nos_action.php', $menu);?> </a>
						</li>
						<li class="nav-item">
							<a href="kit.php" <?php if ($page === "/kit.php") {echo "class='nav-link li ongletstat'";} else{echo "class='nav-link li'";} ?> ><?php echo leMenu('kit.php', $menu);?></a>
						</li>
						<li class="nav-item">
							<a href="contact.php" <?php if ($page === "/contact.php") {echo "class='nav-link li ongletstat'";} else{echo "class='nav-link li'";} ?>><?php echo leMenu('contact.php', $menu);?></a>
						</li>
						<li class="nav-item">
						<div class="btn_engaged green_background">
							<a href="#" id="button_engaged" class="button">JE M'ENGAGE</a>
						</div>
						</li>
					</ul>
				</div>
            </nav>


            
