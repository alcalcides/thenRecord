<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php
    if ($_SERVER['SERVER_NAME'] != "localhost")
        require '../includes/googleAnalytics.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL | Then Record</title>
</head>
<body>       
    <?php 
        require '../../control/loadSheet.php';
        displaySheet("SQL", " # ");
    ?>
</body>
</html>