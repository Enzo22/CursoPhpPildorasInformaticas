<style>
            h1{
                <text-align:center;
              }
            table{
                background-color: #334CFF;
                padding: 5px;
                border: #666 5x solid;
            }
            .no_validado{
                font-size:18px;
                color:#FF3333;
                font-weight:bold;
            }
            .validado{
                font-size:18px;
                color:#4CFF33 ;
                font-weight:bold;
            }
        </style>

<?php
    if(isset($_POST["enviando"])){ //comprueba si hemos pulsado el boton de enviar
        $usuario = $_POST["nombre_usuario"]; //$_POST: variable super global
        $edad = $_POST["edad_usuario"];
        if($usuario == "Enzo" && $edad >= 18){
            echo "<p class='validado'>Eres mayor de edad, puedes entrar</p>";
        }else{
            echo "<p class='no_validado'>No eres mayor de edad, no puedes entrar</p>";
        }
    }
?>