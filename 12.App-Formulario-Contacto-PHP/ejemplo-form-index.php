<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            font-weight: bold;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="recibe-get.php" method="get"> <!-- con action le decimos donde guarda los datos -->
        <input type="text" placeholder="Nombre" name="nombre" id=""> <!-- el value lo define el usuario -->
        <br>
        <label for="mujer">Mujer</label> <!-- El for del label se relaciona bon id del input -->
        <input type="radio" name="sexo" value="mujer" id="mujer">  <!-- name iguales -->
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre"> <!-- name iguales, como accedemos a ellos mediante PHP-->
        <br>
        <select name="fecha" id="">
            <option value="2000">2000</option> <!-- value lo recibimos con PHP -->
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>
        <label for="terminos">Aceptar Terminos</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>