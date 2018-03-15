<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$string = file_get_contents('./dados.txt');

$array=explode("," ,$string);

$arraytratado = array();

foreach ($array as $key=>$value) {
            
        $linha = explode("<" ,trim($value));
        $linha = str_replace('>',' ', $linha);
        $linha = str_replace('"',' ', $linha);
        $linha[0] = trim($linha[0]);
        $arraytratado[] = $linha;
       
}
var_dump($arraytratado);

?>
