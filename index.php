<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-latest.min.js"></script>
		<Title>Koobecaf, faites vous des ennemis...</Title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link href="style.css" rel="stylesheet">
		<meta name="Category" content="Réseau social">
		<meta name="Language" content="fr">
		<meta name="Description" content="Koobecaf vous permet de rester en contact avec vos amis mais aussi de vous faire des ennemis ">
	</head>
	<body>
	<style type="text/css">
		
	</style>
		<div id="img">
			<img src ="logo.jpg" title="Koobecaf logo" alt="Koobecaf logo"/>
			Vous ne pouvez pas vous faire d'amis sans vous faire d'ennemis
			<div id="subscribe"><form method="post" action="post.php" onsubmit="return subscribe();"><input type="text"  id="text" name="mail"/><input type="submit"  class="classname"  value="Valider"/></form></div>
			<div class="arrow_box">Inscrivez vous &agrave; la file d'attente Koobecaf</div>
		</div>
		<script>
			//on utilise jquery pour faire une requete Ajax et envoyer le formulaire automatiquement 
			function subscribe(){
				var mail= $('#text').val();
				$.post( "post.php", { mail: ""+mail})
				.done(function( data ) {
					$( ".arrow_box" ).html( data );
				}); 
				return false;
			}
		</script>
	</body>
</html>
