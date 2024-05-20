<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <!-- 
        l'attributo action ci permette di inviare e stampare i contenuti del form 
        nel file desiderato. In questo caso print.php
    -->
    <div class="container">
        <h2>Scrivi il tuo paragrafo</h2>
        <form action="print.php" method="GET">
            <div class="cont-text-area">
                <textarea name="userparagraf" rows="4" cols="50" placeholder="Scrivi il tup paragrafo qui..."  id="userparagraf"></textarea>
            </div>
            <div class="cont-input">
                <input name="usercensured" placeholder="parola da censurare" type="text">
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>