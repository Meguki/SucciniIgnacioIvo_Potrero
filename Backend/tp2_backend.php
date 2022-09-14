<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP 2 -BACKEND-</h1>
        <div>
            <h2>Ejercicio 1:</h2>
            <p>
                <?php 
                $num = "21";

                if ( $num > 0){
                    echo "$num es positivo";
                }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 2:</h2>
            <p>
                <?php
                $num2 = "5";

                if (($num2 > 1) && $num2 < 10){
                    echo "$num2 es mayor a 1 y menor a 10";
                }
                else{
                    echo "El número no es mayor a 1 o menor a 10";
                }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 3:</h2>
            <p>
                <?php
                $num3 = "14";

                if ($num3 > 10){
                    echo "$num3 es mayor a 10";
                }
                elseif ($num3 < 2){
                    echo "$num3 es menor a 2";
                }
                else{
                    echo "$num3 no es major a 10 ni menor a 2";
                }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 4:</h2>
            <p>
                <?php 
                $numero1 = "6";
                $numero2 = "12";

                if($numero1 > $numero2){
                    echo "La suma es: ";
                    echo ($numero1 + $numero2);
                    echo "<br>La resta es: ";
                    echo ($numero1 - $numero2);
                }
                elseif ($numero1 < $numero2){
                    echo "La multiplicación es: ";
                    echo ($numero1 * $numero2);
                    echo "<br>La división es: ";
                    //Puse la funcion floor ya que rendodea al piso del resultado y lo muestra entero
                    echo floor($numero1 / $numero2);
                    echo " y su resto es: ";
                    echo ($numero1 % $numero2);
                }
                elseif ($numero1 == $numero2){
                    echo "“Los números ingresados son iguales";
                }
                ?>
            </p>
        </div>
        <hr>
</body>
</html>