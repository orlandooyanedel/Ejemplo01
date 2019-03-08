<?php
include "programacion.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            include "resultado.php";
            $A=10;
            $a=11;
            $hello="HolaMundo";
            echo "Saludo $hello x $A y $a";
            echo "<br>";
            echo 'Saludo '. '$hello'. 'x'. '$A'. 'y'. '$a';
            echo "<br>";
            $dia["Lunes"]="1 clase";
            $dia["Martes"]="3 clases";
            $dia["Miercoles"]="4 clases";
            $dia["Jueves"]="4 clases";
            $dia["Viernes"]="2 clases";
            
            foreach ($dia as $value){
                echo $value."<br>";
            }
        ?>
    </body>
</html>
