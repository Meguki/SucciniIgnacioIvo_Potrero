<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>TP 4 -BACKEND-</h1>
        <div>
            <h2>Ejercicio 1:</h2>
            <p>
                <?php 
                $pares = ["2", "4", "6", "8", "10", "12", "16", "18", "20", "22"];
                echo "<pre>";
                print_r($pares);
                echo "</pre>";
                
                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 2:</h2>
            <p>
                <?php 
                $valores = ["Pedro", "Ana", "34", "1"];
                print_r($valores);
                
                ?>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 3:</h2>
            <p>
                <?php 
                $datos = [
                    'nombre' => "Pedro",
                    'apellido' => "Torres",
                    'direccion' => "Av. Mayor 3703",
                    'telefono' => "1122334455",
                ];
                echo "<pre>";
                print_r($datos);
                echo "</pre>";

                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 4:</h2>
            <p>
                <?php 
                $ciudades = ["Madrid,", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
                echo "<pre>";
                print_r($ciudades);
                echo "</pre>";

                print "La ciudad con el índice 0 tiene el nombre $ciudades[0].</br>";
                print "La ciudad con el índice 1 tiene el nombre $ciudades[1].</br>";
                print "La ciudad con el índice 2 tiene el nombre $ciudades[2].</br>";
                print "La ciudad con el índice 3 tiene el nombre $ciudades[3].</br>";
                print "La ciudad con el índice 4 tiene el nombre $ciudades[4].</br>";
                print "La ciudad con el índice 5 tiene el nombre $ciudades[5].</br>";

                ?>
            </p>
        </div>
        <hr>
        <div>
            <h2>Ejercicio 5:</h2>
            <p>
                <?php 
                $ciudades = [
                    'MD' =>"Madrid,", 
                    'BCL' =>"Barcelona", 
                    'LD' =>"Londres", 
                    'NY' =>"New York", 
                    'LA' =>"Los Ángeles", 
                    'CCG' =>"Chicago"
                ];
                echo "<pre>";
                print_r($ciudades);
                echo "</pre>";

                print "La ciudad con el índice MD tiene el nombre $ciudades[MD].</br>";
                print "La ciudad con el índice BCL tiene el nombre $ciudades[BCL].</br>";
                print "La ciudad con el índice LD tiene el nombre $ciudades[LD].</br>";
                print "La ciudad con el índice NY tiene el nombre $ciudades[NY].</br>";
                print "La ciudad con el índice LA tiene el nombre $ciudades[LA].</br>";
                print "La ciudad con el índice CCG tiene el nombre $ciudades[CCG].</br>";

                ?>
            </p>
        </div>
        <hr>

    </body>
</html>