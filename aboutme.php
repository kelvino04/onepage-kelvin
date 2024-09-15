<?php session_start(); ?>
<!DOCTYPE html>
<html lang="nl">
<?php
require_once 'head.php';
?>
<body>
	<div>
		<?php
			require_once('header.php');
		?>
		<main>
			<div class="wrapper">
				<h1>About me</h1>
			</div>
			<p id="gradientText">Hoi ik ben kelvin. ik ben 20 jaar oud. Ik zit nu in het 2de jaar software development op curio terheidenseweg 350. Eerst 
				zat ik heel erg te twijfelen wat ik later zou willen doen. Uiteindelijk heb ik voor deze opleiding gekozen omdat ik op mijn vorige opleiding 
				(4 Havo op mgr. Frencken colege) het vak informatica kreeg en dat was basic html en toen wist ik het zeker. "dit wil ik later doen".</p>
			<p id="hiddenText" style="display: none"> Vanuit daar ben ik op deze opleiding gekomen. Ik had verwacht dat ik een van de oudste zou zijn in 
				mijn klas maar dat viel wel mee. Deze opleiding vind ik echt heel leuk om te doen want je kan lekker creatief zijn als het allemaal maar
				 werkt. Het is minder moeilijk dan ik vantevoren had verwacht, ik heb namelijk vrienden die al eerder naar deze opleiding zijn gegaan en
				 die zeiden dat het echt moeilijk is. Ik ben hier om te zeggen dat het best wel mee valt als je maar een beetje oplet en logisch na denkt, 
				 het helpt ook om gewoon dingen te proberen en zo nodig het internet (of chatgpt) raadpleegt</p>
			<button id="leesMeer">lees meer <i class="fa-solid fa-arrow-down"></i></button>
    		<button id="leesMinder" style="display: none">lees minder <i class="fa-solid fa-arrow-up"></i></button>

			<script>
				document.getElementById('leesMeer').addEventListener('click' ,function(){
					document.getElementById('hiddenText').style.display = 'block';
					document.getElementById('leesMinder').style.display = 'block';
					document.getElementById('leesMeer').style.display = 'none';
					document.getElementById('gradientText').style.color = "#FC3232";
				})
				document.getElementById('leesMinder').addEventListener('click' ,function(){
					document.getElementById('hiddenText').style.display = 'none';
					document.getElementById('leesMinder').style.display = 'none';
					document.getElementById('leesMeer').style.display = 'block';
					document.getElementById('gradientText').style.color = "transparent";
				})
			</script>
		</main>
		<?php
		require_once('footer.php');
		?>
	</div>
</body>
</html>