<?php
$Meses = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Diplomado</title>
</head>

<body>
    <h1>Registro</h1>
    <form method="post" action="registrar.php">
        Nombres<br>
        <input type="text" name="Nombres" required="" placeholder="Nombre"><br><br>
        Apellidos<br>
        <input type="text" name="Apellidos" required="" placeholder="Apellidos"><br><br>
        Correo<br>
        <input type="Email" name="Correo" required="" placeholder="Correo"><br><br>
        Contraseña<br>
        <input type="password" name="Contraseña" required="" placeholder="Contraseña"><br><br>
        <select name="Dianacimiento" required="">
            <option>Día</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i ?></option>
            <?php
            }
            ?>
        </select>
        <select name="Mesnacimiento" required="">
            <option>Mes</option>
            <?php
            foreach ($Meses as $Mes) {
            ?>
                <option value="<?php echo $Mes; ?>"><?php echo $Mes; ?></option>
            <?php
            }
            ?>
        </select>
        <select name="Anonacimiento" required="">
            <option>Año</option>
            <?php
            for ($i = 2021; $i >= 1950; $i--) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i ?></option>
            <?php
            }
            ?>
        </select><br><br>
        Sexo<br>
        <input type="radio" name="Sexo" value="Mujer">Mujer
        <input type="radio" name="Sexo" value="Hombre">Hombre
        <input type="radio" name="Sexo" value="Personalizado">Personalizado
        <p>Al hacer click en "Registrarse", aceptas nuestras Condiciones, la Política de datos y la Política
            de cookies.<br>Es posible que te enviemos notificaciones por SMS, que puedes desactivar cuando quieras.</p>
        <input type="submit" name="Registrarte">
    </form>
</body>

</html>