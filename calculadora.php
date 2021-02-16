<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>


<?php
if(isset($_POST["button"])){
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];
        calcular($operacion);
}

        function calcular($calculo){
            if(!strcmp("Sumar", $calculo)){
                global $numero1;
                global $numero2;
                $resultado = $numero1 + $numero2;
                echo "<p class = 'resultado'> El resultado es: $resultado</p>";
                
            }
            else if(!strcmp("Restar", $calculo)){
                global $numero1;
                global $numero2;
                $resultado = $numero1 - $numero2;
                echo "<p class = 'resultado'> El resultado es: $resultado</p>";
                
            }
            else if(!strcmp("Multiplicacion", $calculo)){
                global $numero1;
                global $numero2;
                $resultado = $numero1 * $numero2;
                echo "<p class = 'resultado'> El resultado es: $resultado</p>";
                
            }
            else if(!strcmp("Division", $calculo)){
                global $numero1;
                global $numero2;
                $resultado = $numero1 / $numero2;
                echo "<p class = 'resultado'> El resultado es: $resultado</p>";
                
            }
            else if(!strcmp("Módulo", $calculo)){
                global $numero1;
                global $numero2;
                $resultado = $numero1 % $numero2;
                echo "<p class = 'resultado'> El resultado es: $resultado</p>";
            }
        }
?>  