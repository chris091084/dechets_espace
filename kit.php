

<?php include("head.php"); ?>

    <?php include("navbarre.php"); ?>

<?php include("articles.php"); ?>

        <div class="container">
        
    <section class="presentation">
        <h2>Le kit du nettoyeur</h2>
        <p>Tout bon bénévole se doit d’avoir un bon équipement, surtout lorsqu’il s’agit de partir dans l’espace! C’est pourquoi chez Unis-Vert nous avons conçu un kit du “parfait nettoyeur”, avec amour, passion et sécurité, rien que pour vous!</p>
    </section>
        
<section id="your_kit">
<div class="row">
    <div class="col-lg-6  order-sm-1">
        <img src="assets/kit_combinaison.jpg" class="img_resolution" alt="astronaut">
    </div>   
    <div class="col-lg-6  order-sm-0 txt">
        <h3>La combinaison</h3>
        <?=$articles[0];?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 order-lg-0 order-sm-1">
        <img src="assets/kit_vacuum.jpg" class="img_resolution" alt="vacuum">
    </div>
    <div class="col-lg-6 oorder-lg-1 rder-sm-0 txt">
        <h3>L'aspirateur à débris</h3>
        <?=$articles[1];?>
    </div>
</div>
<div class="row">
        <div class="col-lg-6 order-sm-1">
            <img src="assets/kit_laser.jpg" class="img_resolution" alt="laser">
        </div>
        <div class="col-lg-6 order-sm-0 txt">
            <h3>Le sabre laser</h3>
            <?=$articles[2];?>
        </div>
    </div>
</section>
</div>

    <?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
<script src="https://kit.fontawesome.com/1dd88b31c0.js "></script>
</body>
</html>