<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>&nbsp;</p>
<form name ="form1" method="post" action="calculadora.php">
<input type ="text" name="num1" id=num1>
<label for ="num2"></label>
<input type ="text" name="num2" id=num2>
<label for ="operacion"></label>
<select name ="operacion" id="operacion">
<option>Sumar</option>
<option>Restar</option>
<option>Multiplicacion</option>
<option>Division</option>
<option>Módulo</option>
</select>
</p>
<p>
<input type ="submit" name="button" value="Enviar" onclick="prueba">
</p>
</form>
<p>&nbsp;</p>

</body>


</html>