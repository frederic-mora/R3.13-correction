<?php

/*  

    Dernier concept de POO : l'abstraction

    Pour donner un exemple, prenons la classe product : Est-il utile/souhaitable de
    pouvoir créer des objets de la classe Product ? Question un peu étrange, après
    tout, nos Amiibo et Tshirt sont aussi des Product ! Si on ne peut pas en créer
    à quoi tout cela sert ?! Précisons : permettre des instructions comme
    'new Amiibo(..., ...)' ou bien 'new Tshirt(...)' ok. Mais faut-il permettre
    'new Product(...)' ???
    A priori la réponse est non. Dans notre code, un objet Product et strictement Product
    est un générique. Son seul intérêt est de servir de classe mère à tous les 'vrais'
    produits qui vont en hériter.
    La classe Product représente de manière générique tout type de produit en vente sur
    notre site. On dira que la classe Product est une abstraction de tout ce que l'on
    y trouve.
*/

/*  Q1

    Modifiez la définition de la classe Product afin d'en faire un classe abstraite. C'est
    à dire une classe dont on peut hériter, mais qu'on ne peut pas instancier.
    Vérifiez qu'il ne vous est plus possible d'instancier un objet Product.
*/

/*  Q2

    Couper/coller la méthode getPrice de la classe Tshirt dans la classe Product.
    Du coup vous aurez pour la classe Amiibo, une méthode getPrice définie dans la classe 
    Product plus une méthode getPrice définie dans la classe Amiibo. Est-ce que ça marche
    quand même ? Et si oui pourquoi ?
*/

require_once("class/Amiibo.php");
require_once("class/Tshirt.php");
require_once("class/Stock.php");

$archer = new Amiibo("Link [Archer]", "Switch and Switch Lite");
$archer->setDescription("Cette flèche archéonique vous emmènera loin ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$archer->setPrice(58.25);
$archer->setImage("./asset/amiibo-link-archer_2x.png");


$zelda = new Amiibo("Zelda", "Switch, Wii U, Nintendo DS");
$zelda->setDescription("Ne sous-estimez pas la princesse Zelda ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$zelda->setPrice(62.41)->setImage("./asset/amiibo-zelda_2x.png");

$rider = new Amiibo("Link [Rider]", "Wii U, Switch, Siwtch Lite");
$rider->setDescription("Il y a des chevaux et puis il y a Epona ! Découvrez vite
        les avantages de cet amiibo compatible avec de multiples jeux");
$rider->setPrice(54.08);
$rider->setImage("./asset/amiibo-link-rider_2x.png");



$triforce = new Tshirt("T-Shirt Tri-Force");
$triforce->setDescription("60% Cotton, 40% Polyester. Laver à l'eau froide. Ne pas utiliser de javel");
$triforce->setSizes(["S", "M", "L", "XL"]);
$triforce->setPrice(29.90);
$triforce->setImage("./asset/tshirt-triforce.png");


$hyrule = new Tshirt("T-Shirt Hyrule");
$hyrule->setDescription("50% Cotton, 50% Polyester. Lavage à 30° max.");
$hyrule->setSizes(["M", "L", "XL", "XXL"]);
$hyrule->setPrice(24.90);
$hyrule->setImage("./asset/tshirt-hyrule.png");

$sheika = new Tshirt("T-Shirt Sheika");
$sheika->setDescription("100% Synthétique. Lavage à 40°. Ne pas utiliser de détatachant.");
$sheika->setSizes(["XS", "S", "XL", "XXL"]);
$sheika->setPrice(24.90);
$sheika->setImage("./asset/tshirt-sheika.jpg");


$stock = new Stock();
$stock->addProduct($archer)->addProduct($zelda)->addProduct($rider)
      ->addProduct($triforce)->addProduct($hyrule)->addProduct($sheika);
