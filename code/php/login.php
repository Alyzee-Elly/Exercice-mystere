<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="../css/login.css">

		<title>Login</title>


	</head>

<body>

<?php
//Ouverture de session
session_start(); 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mystery_word";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id_user, first_name, last_name, email, password FROM User WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

// Vérification du mdp
        if (password_verify($password, $row["password"])) {
// Informations d'identification correctes, connecter l'utilisateur
            $_SESSION["user_id"] = $row["id_user"];
            $_SESSION["user_first_name"] = $row["first_name"];
            $_SESSION["user_last_name"] = $row["last_name"];
            $_SESSION["user_email"] = $row["email"];

// Rediriger l'utilisateur
            header("Location: mystery_word.php");
            exit();
        } else {
// Si le mdp est incorrect
             $error_message = "Vous avez rentré le mauvais mot de passe.";
        }
    } else {
// L'utilisateur avec cet e-mail n'existe pas
            $error_message = "Aucun utilisateur est inscrit avec cette adresse e-mail.";
         }
}

// Deconnextion
$conn->close();
?>


    $sql="SELECT*,
    FROM Mystery_world";
    $resultat = mysqli_query($connexion,$sql);
    

    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="./register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>