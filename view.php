<?php
// utility function for renderAmiibo function (see below)
function curlyBraces($tag)
{
    return "{{".$tag."}}";
}

/*  function renderAmiibo
    $amiibo: an Amiibo object (see model.php)
    returned value: a string which is the template-card-amiibo.html.inc formated using $amiibo
*/
function renderAmiibo($amiibo)
{
    $template = file_get_contents("./templates/template-card-amiibo.html.inc");
    $search = ["{{id}}", "{{title}}", "{{subtitle}}", "{{description}}", "{{price}}", "{{image}}"];
    $replace = [$amiibo->getId(), $amiibo->getName(), $amiibo->getCompatibility(), $amiibo->getDescription(), $amiibo->getPrice(), $amiibo->getImage()];
    return str_replace( $search, $replace, $template);
}

/*  function renderTshirt
    $tshirt: a Tshirt object (see model.php)
    returned value: a string which is the template-card-tshirt.html.inc formated using $tshirt
*/
function renderTshirt($tshirt)
{
    $template = file_get_contents("./templates/template-card-tshirt.html.inc");
    $search = ["{{id}}", "{{title}}", "{{description}}", "{{sizes}}", "{{price}}", "{{image}}"];
    $replace = [$tshirt->getId(), $tshirt->getName(), $tshirt->getDescription(), implode(" - ", $tshirt->getSizes()), $tshirt->getPrice(), $tshirt->getImage()];
    return str_replace( $search, $replace, $template);   
}
