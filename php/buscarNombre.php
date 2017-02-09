<?php


  if ($_POST['rut']) {
  	$rut = $_POST['rut'];
  	$dv = $rut[strlen($rut)-1];
  	$rut = substr($_POST['rut'], 0, -1);
  	$rutdv = $rut . "-" . $dv;

    $forcastPage = file_get_contents('http://chile.rutificador.com/rut/'. $rutdv .'/');

    $pageArray = explode('<h1>RUT</h1>',$forcastPage);
    if(isset($pageArray[1])){
	    $secondArray = explode('<h1>Nombre</h1>' ,$pageArray[1]);

	    $rutE = str_replace('</h3>','',str_replace('<h3>','',$secondArray[0]));
	    $nombreE = str_replace('</h3>','',str_replace('<h3>','',explode('<p', $secondArray[1])[0]));
	    $sinEspacios = explode('<h2>',$nombreE);
	    $nombreFinal = explode('</h2>',$sinEspacios[1]);
	    echo $nombreFinal[0];
    }else{
    	echo "No encontrado...";
    }    
  }

  

?>