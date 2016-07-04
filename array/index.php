<?php

function home(){

	$x[0]="Hello";
	$x[1]="World!";
	#echo "<h1>$x[0] $x[1]</h1>";

	$a = "Hello";
	$b = "World!";
	#echo "$a ";
	#echo "$b";

	$y= $x;
	#echo $y[1];

	$zoo= array("Leão", "Elefante", "Girafa"); // valor implicito - Automático - Começa mo 0

	#echo "<pre>";
	#print_r($zoo);
	#echo "</pre>";

	#echo "$zoo[0], "; echo "$zoo[1], "; echo "$zoo[2]";

	$nomes= array("a"=>"Apple",0=>"João", 1=>"Camila", 2=>"Rafael", 3=>"Júlia", 4=>"<div align='center'><img  width='300px' src='./css/img/iphone6s.png'/></div>"); //array com valores explicitos

	#echo "<h3>$nomes[4]</h3>"; //mostra logo iphone
	#echo "<h3 align='center'>". $nomes["a"] ."</h3>";

}

function home1(){

	#echo "home1";

	$x[0][0]="Valor 1";
	$x[0][1]="Valor 2";
	$x[1]="Valor 3";
	$x[2][0]="Valor 4";
	$x[2][1]="Valor 5";

	#echo "<pre>";
	#echo $x[0][1];
	#echo "<br/>";
	#print_r($x);
	#echo "</pre>";

	$cor=array(0=>array(0=>"Ciano",1=>"Preto"),1=>"Branco");

	echo "<pre>";
	echo $cor[0][1]; //para imprimir a cor ciano
	echo "<br/>";
	print_r($x);
	echo "</pre>";
}

function home2(){
	$config= array(); // declarando variável

	$config["Nome"]= "Apple";
	$config["Email"]= "@icloud.com";
	$config["Site"]= "http://apple.com.br";

	echo "<pre>";
	print_r($config);

	echo $config["Nome"]." - ".$config["Site"];
	echo "</pre>";
}

function empresa(){
	echo "teste";
}

function contato(){
	echo "teste1";
}

function sobre(){
	echo "teste2";
}



?>