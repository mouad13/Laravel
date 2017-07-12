<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
</head>
<body>
	<form action={{"/customer2"}} method="post">
		{{csrf_field()}}


		<label for="first_name">Prenom</label>
		<input type="text" name="first_name" value="">

		<label for="last_name">Nom</label>
		<input type="text" name="last_name" value="">

		<label for="email">Email</label>
		<input type="text" name="email" value="">
		

		<button type="submit" name="">envoyer</button>	

	</form>





</body>
</html>