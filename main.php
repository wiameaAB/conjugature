<! DOCTYPE html>
<html>
<head>
   	<meta charset="utf-8">
	<title>Conjugateur</title>
</head>

<header>
	<h1>Conjugateur</h1>
</header>

<body>
	<fieldset> <legend>Présentation</legend> Bienvenu sur mon nouveau sit web dans ce sit je vous aide à conjuguer
	les verbes au plusieurs temps. les verbes de 1 groupe et 2 groupe et 3 groupe.
	J'apprend le progmation car il est impportant on peut faire des programmes et aussi des robot et d'autre choses amusantes, 
	le but de ce sit c'est de dévlopper mes conaissence,
	créer ce sit ce n'est pas une chose facile c'est très compliqué ça prend un moins ou plus pour
	les debutants comme moi mais mon prof va m'aider a créer ce sit.
	</fieldset>

	<fieldset><legend>Chosir votre verbe</legend>
		<form action="verbe_conjugaison.php" method="POST">

			<input type="text" name="verbe" id="EnterLeVerbe" placeholder="Entrer le verbe">
			
			
			<select name="mode">
				<optgroup label="Mode">
					<option value="indicatif">Indicatif</option>
					<!--Completer les autres modes-->
				</optgroup>
			</select>

			<select name="temps">
				<optgroup label="Temps">
					<option value="present">Présent</option>
					<!--Completer les autres temps-->
				</optgroup>
			</select>
		
			<input type="submit" value="conjuger-le">

		</form>
	</fieldset>



</body>
</html>