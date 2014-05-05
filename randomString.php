<?php

//Codigo que crea una cadena de texto aleatoria

function randomString($length = 10, $letters = NULL){
	//Si no nos especifican lo contrario usaremos un conjunto de letras por defecto
	if($letters==NULL || strlen($letters) == 0){
		$letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890._"; //Por defecto usaremos todas estas letras
	}
	
	$str = ''; //Cadena resultante
	$max = strlen($letters)-1;
	
	for($i=0; $i<$length; $i++){
		$str .= $letters[rand(0,$max)]; //Hasta que tengamos $length caracteres agregamos una letra al azar del conjunto $letters
	}
	
	return $str;
}

echo 'Cadena al azar 4 caracteres: ';
echo randomString(4);

echo '<br>Cadena al azar de 5-10 caracteres: ';
echo randomString(rand(5,10));

echo '<br>Cadena al azar de 3 caracteres sin numeros: ';
echo randomString(3,'abcdefghijklmnopqrstuvwxyz');

