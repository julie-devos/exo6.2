<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 6-Partie 2</title>
</head>
<body>
<?php
    $age= rand(0, 100);
?>
<p><?=$age." ";?></p>
<?= $age<18 ? "Tu es mineur" : "Tu es majeur";?>

</body>
</html>