<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get">
        <h2>connexion</h2>
        <input type="text" name="nom" placeholder="nom" required>
        <input type="text" name="prenom" placeholder="prenom" id="prenom" required>
        <input type="password" name="mdp" id="mdp" placeholder="mot de passe" required>
        <input type="submit" value="connexion" name="btn">
        <br><a href="./insription.php">inscription</a>
    </form>

    <?php
    if (isset($_GET['btn'])) {
        $host = "127.0.0.1";
        $mysqli = new mysqli($host, "root", "", "infoUser");

        if ($mysqli->connect_error) {
            die("Erreur de connexion: " . $mysqli->connect_error);
        } else {
            $userLastnalme = $_GET['nom'];
            $usernam = $_GET['prenom'];
            $password = $_GET['mdp'];

            $stmt = $mysqli->prepare("SELECT * from information WHERE nom = ? AND prenom = ? AND mdp = ?");

            if ($stmt === false) {
                die("Erreur de préparation de la requête: " . $mysqli->error);
            }

            $stmt->bind_param("sss", $userLastnalme, $usernam, $password);
            $stmt->execute();

            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                echo "<br>L'utilisateur est présent dans la base de données.";
                echo "<br>" . "Bienvenue " . $userLastnalme . " " . $usernam;
            } else {
                echo "<br>L'utilisateur n'est pas présent dans la base de données.";
            }
        }
        $stmt->close();
        $mysqli->close();
    }
    ?>
</body>

</html>