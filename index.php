<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercice 1 -->
        <div>
            <?php
                for($var = 0; $var < 11; $var++) {
                    echo $var." ";
                }
            ?>
        </div>

    <!-- Exercice 2 -->
        <div>
            <?php
                $var1=0;
                $var2=42;              
                while($var1<=20) {
                    $resultat=$var1*$var2;
                    echo $resultat." ";
                    $var1++;
                }            
            ?>
        </div>
    
    <!-- Exercice 3 -->
        <div>
            <?php
                $var1=100;
                $var2=28;
                while($var1>=10) {
                    $resultat=$var1*$var2;
                    echo $resultat." ";
                    $var1--;
                }
            ?>
        </div>

    <!-- Exercice 4 -->
        <div>
            <?php
                $var=1;
                while($var<10) {
                    echo $var." ";
                    $var+=$var/2;
                }
            ?>
        </div>

    <!-- Exercice 5 -->
        <div>
            <?php
                $var=1;
                while($var<=15) {
                    echo $var." ";
                    $var++;
                }
            ?>
        </div>

    <!-- Exercice 6 -->
        <div>
            <?php
                $var=20;
                while($var>=0) {
                    echo $var." ";
                    $var--;
                }
            ?>
        </div>

    <!-- Exercice 7 -->
        <div>
            <?php
                for($var = 1; $var <= 100; $var += 15) {
                    echo $var." ";
                }
            ?>
        </div>

    <!-- Exercice 8 -->
        <div>
            <?php
                for($var = 200; $var >= 0; $var -= 12) {
                    echo $var." ";
                }
            ?>
        </div>
</body>
</html>