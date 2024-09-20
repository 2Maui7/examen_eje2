<?php
$error = '';
$correcto = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $usuario_real = 'Mauricio';
    $contraseña_real = '12345';
    if ($usuario === $usuario_real && $contraseña === $contraseña_real) {
        $correcto = "¡Bienvenido";
    } else {
        $error = "ERROR";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>

<h2>Iniciar Sesión</h2>
<form method="POST" action="">
    <input type="text" name="usuario" placeholder="Usuario" required><br>
    <input type="contraseña" name="contraseña" placeholder="Contraseña" required><br>
    <button type="submit">Ingresar</button>
</form>
<div class="message">
    <?php 
    if ($error): 
    ?>
        <p class="error"><?= $error; ?></p>
    <?php 
    elseif ($correcto): 
    ?>
        <p class="correcto"><?= $correcto; ?></p>
    <?php endif; ?>
</div>

</body>
</html>
<style>
        body {
            background-color: #f0f0f0;
            text-align: center;
            margin-top: 100px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        input {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            width: 100%;
        }
</style>