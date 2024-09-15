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
		<?php
		if (isset($_GET['msg'])){
			echo $_GET['msg'];
		}
		?>
        <h1>Contact</h1>
       		<div class="form">
            	<form action="backend/contactController.php" method="POST">
					<div class="formgroup">
                		<label for="name">Naam:</label>
                		<input type="text" name="name" placeholder="Vul hier je naam in">
					</div>

					<div class="formgroup">
                		<label for="email">Emailadres:</label>
                		<input type="email" name="email" placeholder="Vul hier je emailadres in">
					</div>

					<div class="formgroup">
						<label for="name">Telefoonnummer:</label>
                		<input type="text" name="tel" placeholder="Vul hier je telefoonnummer in">
					</div>

					<div class="formgroup">
                		<input type="radio" name="reden" value="klacht">
						<label for="klacht">Klacht</label>

						<input type="radio" name="reden" value="vraag">
						<label for="klacht">Vraag</label>

						<input type="radio" name="reden" value="suggestie">
						<label for="klacht">Suggestie</label>
					</div>

					<div class="formgroup">
						<label for="message">Uw bericht:</label>
						<div class="textarea">
							<textarea name="message" id="message" cols="30" rows="10"></textarea>
						</div>
					</div>

					<div class="submit">
						<input class="submit" type="submit" value="Verstuur">
					</div>
            	</form>
        	</div>
		</main>
		<?php
		require_once('footer.php');
		?>
	</div>
</body>
</html>