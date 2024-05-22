<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="number" name="num" id="num">
        <input type="text" name="phrase" id="phrase">
        <input type="text" name="phrase1" id="phrase2">
        <input type="text" name="phrase2" id="phrase2">
        <input type="submit" value="verifier" name="btn">
    </form>
    <br><br><br><br>
    <form action="" method="get">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="text" name="adresse" id="adresse" placeholder="adresse">
        <input type="submit" value="confirmer" name="tableau">
    </form>

    <?php
    function verifier($x)
    {
        if ($x % 3 == 0 && $x % 5 == 0) {
            echo $x . " est multiple de 3 et 5 en meme temps <br>";
        } else {
            echo $x . " n'est multiple de 3 et 5 en meme temps <br>";
        }
    }

    function split($y)
    {
        $n = strlen($y);
        for ($i = 0; $i < $n; $i++) {
            echo $y[$i] . "<br>";
        }
    }

    function ordreAlphabitique($z, $w)
    {
        $z = strtolower($z);
        $w = strtolower($w);

        if ($z < $w) {
            echo $z . " " . $w;
        } else {
            echo $w . " " . $z;
        }
    }

    if (isset($_POST['btn'])) {
        # verifier($_POST['num']);
        verifier(intval($_POST['num']));
        split($_POST['phrase']);
        ordreAlphabitique($_POST['phrase1'], $_POST['phrase2']);
    }
    if (isset($_GET['tableau'])) {
        $tab = [$_GET['nom'], $_GET['prenom'], $_GET['adresse']];
        echo "<table border='1'>";
        echo "<tr> <td> nom</td> <td> prenom</td><td> adresse</td> </tr>";
        echo "<tr>";
        foreach ($tab as $c) {
            echo "<td> " . $c . "</td> ";
        }
        echo "</tr>";
        echo "</table>";
    }
    ?>

</body>

</html>