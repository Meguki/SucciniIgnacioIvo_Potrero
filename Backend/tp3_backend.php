<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>TP 3 (TAREA 4) -BACKEND-</h1>
        <div>
            <h2>Ejercicio 1:</h2>
            <p>
                <?php 
                $ej1 = "1"; 
                for ($ej1 = 1; $ej1 <= 100; $ej1++) {
                    echo "$ej1|";
                  }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 2:</h2>
            <p>
                <?php 
                $ej2 = "100"; 
                for ($ej2 = 100; $ej2 >= 1; $ej2--) {
                    echo "$ej2|";
                  }
                ?>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 3:</h2>
            <p>
                <?php 
                $ej3 = "2"; 
                for ($ej3 = 2; $ej3 <= 100; $ej3++ & $ej3++) {
                    echo "$ej3|";
                  }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 4:</h2>
            <p>
                <?php 
                $ej4 = "2"; 
                for ($ej4 = 1; $ej4 <= 100; $ej4++ & $ej4++) {
                    echo "$ej4|";
                  }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 5:</h2>
            <p>
                <?php 
                $ej5 = "1";
                $ej5result = "0"; 
                for ($ej5 = 1; $ej5 <= 20; $ej5++) {
                    $ej5result = $ej5 + $ej5result;
                    echo "|$ej5result|";
                  }
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 6:</h2>
            <p>
                <?php 
                $ej6 = "1";
                $ej6result = "0"; 
                for ($ej6 = 1; $ej6 <= 20; $ej6++ & $ej6++) {
                    $ej6result = $ej6 + $ej6result;
                    echo "|$ej6result|";
                  }
                ?>
            </p>
        </div>
        <hr>

    </body>
</html>