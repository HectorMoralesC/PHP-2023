<?php

$errores='';


if (isset($_POST['submit'])) {
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];

    // echo 'Tu nombre es ' . $nombre . '<br>';
    // echo 'Tu correo es ' . $email . '<br>';
    // Hasta aqui el usuario podria inyectar c�digo <strong>Marc</strong>
    // Incluso podrian estar vacios los campos
    // Para validar los datos correctos debemos limpiar el c�digo que recibimos

    if (!empty($nombre)) {
        $nombre= trim($nombre); //quita espacios
        $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar c�digo

        //OBSOLETO
        // $nombre=filter_var($nombre, FILTER_SANITIZE_STRING); //Filtros de "saneamiento" retira caracteres que no queremos

        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errores .= 'Por favor escribe un nombre <br>';
        //$errores = $errores . " m�s texto concatenado";
    }
    // Formato de email  nombre@dominio.extension a@a.a
    if (!empty($email)) {
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validaci�n" del correo
            $errores .= 'Por favor escribe un correo v�lido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Valida datos del formulario</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> 
        <input type="text" name="nombre" placeholder="Nombre" id="">
        <input type="text" name="email" placeholder="Email" id=""> <!--Tipo normal type="email"-->

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>
            
        <input type="submit" name="submit" value="Enviar formulario" >
    </form>
</body>
</html>




















<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Formulari de Contacte</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="correu" placeholder="Correu">

        <?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
		<?php elseif($enviado = true): ?>
				<div class="alert success">
				<!--	<p>Enviado Correctamente</p> -->
                    
				</div>
	    <?php endif ?>

        <input type="submit" name="submit" placeholder="Enviar Correu">
    </form>

    
</body>
</html>