<?php 
$user_paragraf = $_GET["userparagraf"];
$user_censured = $_GET["usercensured"];
$count = 0;
$censured_paragraf = str_ireplace($user_censured, '****', $user_paragraf, $count);
$censured_length = strlen($user_paragraf);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleprint.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Paragrafo</h1>
        <h2>Il mio paragrafo è composto da <?php echo strlen($user_paragraf);?> caratteri</h2>
        <h3>la parola è stata censurata <?php echo $count ?> volte</h3>
        <p><?php echo $censured_paragraf  ?></p>    
    </div>
</body>
</html>