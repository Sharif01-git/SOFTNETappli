<?php

function getprix($prix){
$prix = floatval($prix);

return number_format($prix, 3, ' ', '') . 'FCFA';
}

?>
