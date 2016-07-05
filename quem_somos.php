<!DOCTYPE html>
<html>
<head>
	<?php 
	include "array/index.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8"/>
	<title>Curso PHP Intermediário</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.brown-deep_orange.min.css" />
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
	
	
</head>
<body>

	<div class=" transparent mdl-layout mdl-js-layout mdl-layout--fixed-header ">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"> PHP INTERMEDIÁRIO</span>
				<div class="mdl-layout-spacer"></div>

				<form action="#">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
						<label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input" type="text" id="sample6">
							<label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
						</div>
					</div>
				</form>
				<nav class="mdl-navigation">
					
					<a href="quem_somos.php" class="mdl-navigation__link">SOBRE</a>

				</nav>

			</div>
		</header>
		<div class="mdl-layout__drawer" >
			<span id="fundopreto" class="mdl-layout-title">INTRODUÇÃO
				<i class="material-icons">dashboard</i>
			</span>
			<nav class="mdl-navigation">
				<div class="mostra-celular">
					<a href="index.php" class="mdl-navigation__link">HOME</a>
					<a href="empresa.php" class="mdl-navigation__link">EMPRESA</a>
					<a href="quem_somos.php" class="mdl-navigation__link">SOBRE</a>
					<a href="contado.php" class="mdl-navigation__link">CONTATOS</a>
				</div>
			</nav>
		</div>

		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" align="center">
				
				<div class="mdl-card mdl-shadow--2dp demostracao-card">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text titlecard"></h2>
					</div>
					<div class="mdl-card__supporting-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue urna libero, sit amet mattis risus finibus ac. Aenean metus quam, consectetur at pretium vitae, aliquam nec lorem. Donec ligula tortor, elementum eget ullamcorper quis, vestibulum sed nunc
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue urna libero, sit amet mattis risus finibus ac. Aenean metus quam, consectetur at pretium vitae, aliquam nec lorem. Donec ligula tortor, elementum eget ullamcorper quis, vestibulum sed nunc
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue urna libero, sit amet mattis risus finibus ac. Aenean metus quam, consectetur at pretium vitae, aliquam nec lorem. Donec ligula tortor, elementum eget ullamcorper quis, vestibulum sed nunc
					</div>
					<div class=" mdl-card__actions mdl-card--border">
						<a href="quem_somos.php"><button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent" data-upgraded=",MaterialButton,MaterialRipple">Acess<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button></a>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
							<i class="material-icons">share</i>
							<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
						</div>
					</div>

				</div>
			</div>
		<!--	<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer--link-list">
				<ul class="mdl-mini-footer--link-list">
					<li><a href="#">Copyright © 2016 Rodrigo Neuber</a></li>
					<li><a href="#">PHP Intermediário</a></li>
				</ul>
			</div>
		</footer> -->
	</div>
</body>
</html>


