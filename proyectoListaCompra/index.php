<!DOCTYPE html>
<html lang="en" class="navbar is-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bulma.min.css">
    <title>ListaCompra</title>
</head>

<body>
    <!--Barra de navegació-->
    <nav class="navbar is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item">
                <figure class="image is-48x48">
                    <img class="is-rounded" style="max-height: 48px" src="https://as1.ftcdn.net/v2/jpg/03/11/87/52/1000_F_311875255_d57wDCwlZxdtOEwsnmXLHkV1r29i1R2U.jpg"/>
                
                               
                <!--<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">-->
                </figure>
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>        
            </div>
        </div>
    </nav>
    <!--Secció principal-->
    <section class="section" id="seccionPrincipal">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <?php include("view/userDetails.php");?>
                </div>
                <div class="column is-three-quarters">
                    <?php include_once("view/shoppingList.php"); ?>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>