<?php  // "Front Controller"
require_once("class/Product.php");
require_once("class/Stock.php");
require_once("class/Cart.php");

session_start();



require_once("model.php");
require_once("view.php");


if ( isset($_SESSION['cart'])==false ){
    $cart = new Cart();
    $_SESSION['cart'] = $cart;
}
else{
    $cart = $_SESSION['cart'];
}

// controle demande d'achat
if ( isset($_REQUEST["action"]) && $_REQUEST["action"]=="buy"){
    $cart->buy($_REQUEST["idproduct"]);
}

$content = "";

$products = $stock->getProducts();

foreach ($products as $prod)
{
    if ( $prod instanceof Amiibo)
    {
        $content = $content . renderAmiibo($prod);
    }
    else if ($prod instanceof Tshirt )
    {
        $content = $content . renderTshirt($prod);
    }   
}

?>
<!DOCTYPE>
<html lang="fr">

    <head>
        <title>R3.DWeb-DI.13 - POO</title>
        <link href="https://fonts.googleapis.com/css?family=
        Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
        <link href="./style.css" , rel="stylesheet">
    </head>

    <body>
        <section>

            <div class="nine">
                <h1>Zelda - Breath Of The Wild<span>Goodies</span></h1>
            </div>
        
            <div class="flex-container">
                <?php echo $content; ?>
            </div>

        </section>
    </body>

</html>