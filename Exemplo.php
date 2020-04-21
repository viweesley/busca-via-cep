<?php

require_once("vendor/autoload.php");

use viweesley\BuscaViaCep\Search;

$search = new Search;
$zipCode = "01001000";
$result = $search->getAddressFormZipCode($zipCode);
print_r($result);
