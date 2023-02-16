<?php

$_UP['folder'] = './enviados';
$_UP['weigth'] = 1024 * 1024 * 2;
$_UP['extensions'] = array('jpg','png','jpeg','gif');
$_UP['rename'] = false;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

if($_FILES['arquivo']['error'] != 0){
  die("Não foi possível fazer o Upload, erro: " . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit
}

$extension = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
  if(array_search($extension, $_UP['extensions']) === false);{
    echo "Por favor envie arquivos do tipo: jpg, png, jpeg ou gif";
  }


?>