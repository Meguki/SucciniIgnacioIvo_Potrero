<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>TP 1 -BACKEND-</h1>
        <div>
            <h2>Ejercicio 1:</h2>
            <p>
                <?php 
                echo "Hola mundo"; 
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 2:</h2>
            <p>
                <?php
                $mensaje = "Hola mundo"; 
                echo $mensaje; 
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 3:</h2>
            <p>
                <?php 
                $num1 = "8";
                $num2 = "6";
                echo "Numero 1: $num1 | Numero 2: $num2";
                echo "<br>La suma es: ";
                echo ($num1 + $num2);
                echo "<br>La resta es: ";
                echo ($num1 - $num2);
                echo "<br>La multiplicación es: ";
                echo ($num1 * $num2);
                echo "<br>La división es: ";
                //Puse la funcion floor ya que rendodea al piso del resultado y lo muestra entero
                echo floor($num1 / $num2);
                echo " y su resto es: ";
                echo ($num1 % $num2);
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 4:</h2>
            <p>
                <?php 
                $grados = "20";
                $valorfinal = (($grados * 1.8) + 32);
                echo "El valor de 20°C en Fahrenheit es: $valorfinal";
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 5:</h2>
            <p>
                <?php 
                $base = "18";
                $altura = "12";
                $radio = "30";
                $perirec = ((2 * $base) + (2 * $altura));
                $arearec = ($base * $altura);
                $pericir = (2 * 3.14 * $radio);
                $areacir = (3.14 * ($radio * $radio));
                echo "a) El perímetro de un rectángulo con una base de $base centímetros y una altura de $altura centímetros es: $perirec y su área es: $arearec <br>";
                echo "b) El perímetro de un círculo con un radio de $radio centímetros es: $pericir y su área es: $areacir";
                ?>
            </p>
        </div>
        <hr>

    </body>
</html>