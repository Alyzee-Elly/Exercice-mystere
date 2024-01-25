
<?php
//Connexion à la bdd mystery_word
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mystery_word";
 
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Vérification de la transimission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Récupération des données du formulaire
	$first_name = isset($_POST["name"]) ? $_POST["name"] : "";
	$last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$password = isset($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : "";

// Requête SQL
	$sql = "INSERT INTO User (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		echo "Bravo ! Inscription réussie !";
	} else {
		echo "Erreur lors de l'inscription: " . $conn->error;
	}
}

// Rediriger l'utilisateur vers une page de confirmation
header("Location: confirmation.php");
exit();

// Fermer la connexion à la base de données
$conn->close();
?>



