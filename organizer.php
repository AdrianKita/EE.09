<?php
$conn = mysqli_connect("localhost","root","","egzamin6");
$skrypt1 = mysqli_query($conn,"SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac='sierpien';");
$query2 = mysqli_query($conn,'SELECT miesiac, rok FROM zadania WHERE dataZadania = "2020-08-01";');
$skrypt2 = mysqli_fetch_array($query2);
if($_POST)
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="baner">
        <div id="lewy">
            <h2>MÓJ ORGANIZER</h2>
        </div>
        <div id="srodkowy">
            <form method="post">
                <label for="inputText">Wpis wydarzenia: </label>
                <input type="text" id="inputText">
                <button>ZAPISZ</button>
            </form>
        </div>
        <div id="prawy">
            <img src="logo2.png" alt="Mój organizer">
        </div>
    </div>
    <div class="clear"></div>
    <main>
        <?php foreach ($skrypt1 as $s): ?>
            <div class="dzien">
                <h6><?= $s['dataZadania']. $s['miesiac'] ?></h6>
                <p><?= $s['wpis'] ?></p>
            </div>
        <?php endforeach ?>

        <!-- skrypt1 -->
    </main>
    <footer>
        <h1>miesiac: <?= $skrypt2['miesiac']?> rok :<?= $skrypt2['rok']?></h1>
        <p>Strone wykonal: 93213131</p>
    </footer>
</body>
</html>