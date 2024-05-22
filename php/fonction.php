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
        <input type="submit" value="verifier" name="btn">
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

    if (isset($_POST['btn'])) {
        # verifier($_POST['num']);
        verifier(intval($_POST['num']));
        split($_POST['phrase']);
    }
    ?>

</body>

</html>