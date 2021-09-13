-- exercice1(Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...) 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1.boucles</title>
</head>
<body>
<?php 
for ($nombre = 1; $nombre <= 150; $nombre++) {

   if($a mod 2 ==0){
       echo"$a est pair";
   }
   else {
       echo"$a est impair";
   }

echo "<br />";
$nombre++;
}
?>
</body>
</html>

--exercice2(Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2.boucles</title>
</head>
<body>
    <?php
$x = 1;
do {
    echo "$x - Je dois faire des sauvegardes régulières de mes fichiers.<br>";
    $x++;
} while ($x <= 500);
?>
</body>
</html>

--exercice3(Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12},)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3.boucles</title>
</head>
<body>
<table class="highlight centered responsive-table">
    <thead>
        <tr>
            <th></th>
            <?php
            $x = 0;
            while ($x <= 12) {
            ?>
                <th><?= $x ?></th>
            <?php
                $x++;
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $y = 0;
        while ($y <= 12) {
        ?>
            <tr>
                <td>
                    <?= $y ?>
                </td>
                <?php
                $x = 0;
                while ($x <= 12) {
                ?>
                    <td>
                        <?= $x * $y ?>
                        <?php $x++; ?>
                    </td>
                <?php
                } 
                ?>
            </tr>
        <?php
        $y++;
        }
        ?>
    </tbody>
</table>
</body>
</html>

