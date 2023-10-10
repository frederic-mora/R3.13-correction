<?php

require_once("class/Cart.php");
require_once("model.php");

session_start();


if (isset($_SESSION['cart']) == false ){
    header("Location: index.php");
    die();
}

$cart =$_SESSION['cart'];


function renderCart(Cart $c, Stock $s){
    $template = file_get_contents("./templates/template-row-cart.html.inc");
    $search = ["{{title}}", "{{quantity}}", "{{subtotal}}"];
    $lis = "";
    $items = $c->getContent();
    foreach($items as $id => $nb){
        $p = $s->getProductById($id);
        $replace = [$p->getName(), $nb, $nb*$p->getPrice()];
        $lis = $lis . str_replace($search, $replace, $template);
    }
    return $lis;
}

$details = renderCart($cart, $stock);


$total = $cart->getTotal($stock);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre panier</title>
</head>
<body>
    <div>
        <table>
            <?php echo $details ?>
        </table>
        <h3>Total de votre panier : <?php echo $total ?></h3>
    </div>
</body>
</html>

