<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8 lang="it" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cittadella Calcio</title>
	<link rel="stylesheet" href="style/Theme.css">
	<?php
	#array(Partite, Goal, Voto Medio, Numero Maglia, Nome, Ruolo, Anno di Nascita )
	$team = array (
		'Chiarelli L.'=>array('0', '5', 2, 1, 'Lucas', 'Centrocampista','1998'),
		'Arrighini A.'=>array('0', '5', 3, 2, 'Andrea', 'Attaccante','2000'),
		'Iori M.' => array('0', '5', 3, 3, 'Manuel', 'Centrocampista','1986'),
		'Kouame C.' => array('1', '5', 2, 4, 'Christian', 'Attaccante','1990'),
		'Schenetti A.' => array('6', '5', 5, 5, 'Andrea', 'Centrocampista','1996'),
		'Scaglia F.' => array('1', '3', 4, 6, 'Filippo', 'Difensore','1995'),
		'Lunco A.' => array('1', '4', 1, 7, 'Antimo', 'Attaccante','1991'),
		'Pasa S.' => array('2', '5', 5, 8, 'Simone', 'Centrocampista','1985'),
		'Vido L.' => array('0', '5', 2, 9, 'Luca', 'Attaccante','1996'),
		'Varnier M.' => array('0', '5', 3, 9, 'Marco', 'Centrocampista','1989'),
		'Pelagatti C.' => array('3', '5', 3, 10, 'Carlo', 'Difensore','1988'),
		'Salvi A.' => array('4', '5', 1, 11, 'Alessandro', 'Difensore','1978'),
		'Bartolomei P.' => array('1', '5', 4, 12, 'Paolo', 'Centrocampista','1980'),
		'Fasolo G.' => array('2', '5', 5, 13, 'Giulio', 'Attaccante','1983'),
		'Paleari A.' => array('1', '5', 2, 14, 'Alberto Andrea', 'Portiere','1982'),
		'Alfonso E.' => array('0', '5', 3, 15, 'Enrico', 'Portiere','1981'),
		'Lora F.' => array('0', '5', 2, 16, 'Filippo', 'Centrocampista','1990'),
		'Strizzolo L.' => array('0', '3', 1, 17, 'Luca', 'Attaccante','1981'),
		'Liviero M.' => array('1', '2', 4, 18, 'Matteo', 'Difensore','1994'),
		'Benedetti A.' => array('1', '1', 4, 19, 'Amedeo', 'Difensore','1988'),
		'Siega N.' => array('3', '0', 5, 20, 'Nicholas', 'Attaccante','1979'),
		'Settembrini A.' => array('1', '5', 3, 21, 'Andrea', 'Centrocampista','1987'),
		'Caccin G.' => array('0', '5', 5, 22, 'Giacomo', 'Centrocampista','1987'),
		'Adorni D.' => array('0', '5', 1, 23, 'Davide', 'Difensore','1981'),
		'Maniero L.' => array('0', '5', 2, 24, 'Luca', 'Centrocampista','1993'),
		'Pezzi E.' => array('0', '5', 1, 25, 'Enrico', 'Difensore','1992')
	);
	?>
</head>
<body>
	<header class="header-style">
	</header><!-- /header -->
	<section class="asd-description">
		<div class="asd-title">
			<h1>AS Cittadella</h1>
		</div>
	</section>
	<aside class="team-status">
		<p>Statistiche Giocatori</p>
		<table>
			<tr>
				<td>Giocatore</td>
				<td>Partite</td>
				<td>Goal</td>
				<td>Voto Medio</td>
			</tr>
			<?php
			foreach ($team as $giocatore => $statistiche) {
				echo '<tr> 
				<td>' . $giocatore . '</td>
				<td>' . $statistiche[0] .'</td>
				<td>' . $statistiche[1] . '</td>
				<td>';
				for ($i=0; $i < $statistiche[2]; $i++) {
					echo '<img class="star-valuation" src="media/img/tellina.png" alt="">';
				}
				echo '</td> </tr>';
			}
			?>
		</table>
		<img class="team-logo" src="media/img/team-logo.png" alt="logo">
	</aside>	
	<article class="team">
		<header>
			<h1>La Nostra Squadra</h1>
		</header>
			<h2 class="player-position">Attaccanti</h2>
				<table>
					<tr>
					<td>Nome</td>
					<td>Maglia</td>
					<td>Ruolo</td>
					<td>Anno di Nascita</td>
					</tr>
					<?php
					foreach ($team as $player => $statistiche) {
						if ($statistiche[5] == "Attaccante") {
							echo '<tr><td>' . $statistiche[4] . '</td>
							<td>' . $statistiche[3] . '</td>
							<td>' . $statistiche[5] . '</td>
							<td>' . $statistiche[6] . '</td></tr>';
						}
					}
					?>
					</tr>
				</table>
			<h2 class="player-position">Difensori</h2>
				<table>
				<tr>
					<td>Nome</td>
					<td>Maglia</td>
					<td>Ruolo</td>
					<td>Anno di Nascita</td>
				</tr>
					<?php
					foreach ($team as $player => $statistiche) {
						if ($statistiche[5] == "Difensore") {
							echo '<tr><td>' . $statistiche[4] . '</td>
							<td>' . $statistiche[3] . '</td>
							<td>' . $statistiche[5] . '</td>
							<td>' . $statistiche[6] . '</td></tr>';
						}
					}
					?>
				</tr>
				</table>
			<h2 class="player-position">Centrocampisti</h2>
			<table>
				<tr>
					<td>Nome</td>
					<td>Maglia</td>
					<td>Ruolo</td>
					<td>Anno di Nascita</td>
				</tr>
					<?php
					foreach ($team as $player => $statistiche) {
						if ($statistiche[5] == "Centrocampista") {
							echo '<tr><td>' . $statistiche[4] . '</td>
							<td>' . $statistiche[3] . '</td>
							<td>' . $statistiche[5] . '</td>
							<td>' . $statistiche[6] . '</td></tr>';
						}
					}
					?>
				</tr>
			</table>
		<h2 class="player-position">Portieri</h2>
			<table>
				<tr>
					<td>Nome</td>
					<td>Maglia</td>
					<td>Ruolo</td>
					<td>Anno di Nascita</td>
				</tr>
					<?php
					foreach ($team as $player => $statistiche) {
						if ($statistiche[5] == "Portiere") {
							echo '<tr><td>' . $statistiche[4] . '</td>
							<td>' . $statistiche[3] . '</td>
							<td>' . $statistiche[5] . '</td>
							<td>' . $statistiche[6] . '</td></tr>';
						}
					}
					?>
				</tr>
			</table>
	</article>
	<section class="gaming-time">
		<div class="gaming-cont">
			<div id="ball" onclick="move()">
				<img width="50px" height="50px" src="media/img/ball.jpg" alt="ball">
			</div>
		</div>
	</section>
	<footer class="footer-style">
		<hr>
		<h6>
			Via Ca’ Dai Pase 41/b
			35013 Cittadella (PD)
			Telefono: 0495972693 
			Fax: 0499408469
			Email: info@ascittadella.it
			<br>
			Allenatore: Roberto Venturato
		</h6>
		<hr>
	</footer>

	<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
	</script>
</body>
</html>