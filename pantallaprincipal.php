
<?php

require('cabecera.php');

echo
"<div class=' d-flex justify-content-center' style='width:100%;background-color:rgba(9,9,121,1) ' >".
"	<div class='carousel slide'  data-ride='carousel' id='carouselExampleIndicators'>".
"		<ol class='carousel-indicators'>".
"			<li class='active' data-slide-to='0' data-target='#carouselExampleIndicators'></li>".
"			<li data-slide-to='1' data-target='#carouselExampleIndicators'></li>".
"			<li data-slide-to='2' data-target='#carouselExampleIndicators'></li>".
"		</ol>".
"		<div class='carousel-inner'>".
"			<div class='carousel-item active'>".
"				<img alt='First slide' class='d-block w-100' src='imagenes/fotohome1.png'>".
"				<div class='carousel-caption d-flex d-lg-block'>".
"					<h5>Guarda tus recuerdos familiares</h5>".
"					<p>Sube tus videos y conservalos para siempre.</p>".
"				</div>".
"			</div>".
"			<div class='carousel-item '>".
"				<img alt='Second slide' class='d-block w-100 ' src='imagenes/fotohome2.png'>".
"				<div class='carousel-caption d-none d-md-block'>".
"					<h5>Comenta y Comparte tus experiencias familiares</h5>".
"					<p>Permite que otros familiares conozcan lo que has vivido.</p>".
"				</div>".
"			</div>".
"			<div class='carousel-item'>".
"				<img alt='Third slide' class='d-block w-100' src='imagenes/fotohome3.png'>".
"				<div class='carousel-caption d-none d-md-block'>".
"					<h5>Revive esas experiencias experiencias familiares.</h5>".
"					<p>".
"                       Vuelve a vivir esas experiencias a un solo click de distancia. </p>".
"				</div>".
"			</div>".
"		</div><a class='carousel-control-prev' data-slide='prev' href='#carouselExampleIndicators' role='button'><span aria-hidden='true' class='carousel-control-prev-icon'></span> <span class='sr-only'>Previous</span></a> <a class='carousel-control-next' data-slide='next' href='#carouselExampleIndicators' role='button'><span aria-hidden='true' class='carousel-control-next-icon'></span> <span class='sr-only'>Next</span></a>".
"	</div>".
"</div>";

require('footer.php');
?>
