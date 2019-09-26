<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <meta name='viewport' content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="contact.css">
    </head>

<body>

    <?php include("navbarre.php"); ?>

    <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Contact</h2>
                <p>Rejoignez notre communauté de 763 nettoyeurs de l’espace.</p>   
                <p>L'union fait la force !</p>
                <p>En vous engageant auprès d'uni-vert vous permettez la sauvegarde de notre belle galaxie.</p>
                <section class="address">
                            <ul>
                                <li class="contact_address">Adresse :</li>
                                <li class="contact_address">17 rue Delandine</li>
                                <li class="contact_address">69002 LYON</li>
                            </ul>
                            <ul>
                                <li class="contact_address">Email :</li>
                                <li class="contact_address"><a href="mailto:unis-vert@gmail.com">unis-vert@gmail.com</a></li>
                            </ul>
                </section>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label>Votre nom</label>
                        <input type="email" class="form-control" placeholder="Entrez votre nom">
                        <small id="emailHelp" class="form-text text-muted">
                    </div>
                    <div class="form-group">
                        <label>Votre email</label>
                        <input type="email" class="form-control" placeholder="email@email.com">
                    </div>
                    <div class="form-group">
                        <label>Objet</label>
                        <input type="object" class="form-control" placeholder="L'objet de votre message">
                    </div>
                    <div class="form-group">
                        <label>Votre message</label>
                        <textarea rows="4" cols="22" name="message">Dites nous en plus</textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label">S'abonner à la newsletter</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>   
                </form>
            </div>
        </div>

           

        





</div>
<div id="carte_google">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2486673943486!2d4.825337515472792!3d45.74616052260593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ab96b2285%3A0xd07b1fb24dc8242f!2s17%20Rue%20Delandine%2C%2069002%20Lyon!5e0!3m2!1sfr!2sfr!4v1568753241054!5m2!1sfr!2sfr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</section>

    <?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
<script src="https://kit.fontawesome.com/1dd88b31c0.js "></script>
</body>
</html>