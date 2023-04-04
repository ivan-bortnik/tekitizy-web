<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "intranet" && $password == "T&k!t!zY") {
        header("intranet.html");
        exit;
    } else {
        $errorMessage = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Page de connexion</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tek-It-Izy</h1>
    </header>
	<div class="login-box">
		<h2>Connexion</h2>
		<form method="post">
			<label for="username">Nom d'utilisateur</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" required>
            <?php if(isset($errorMessage)) { ?>
                <p class="error"><?php echo $errorMessage; ?></p>
            <?php } ?>
			<button type="submit">Se connecter</button>
		</form>
	</div>
</body>
</html>