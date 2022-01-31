<?php
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$Dianacimiento = $_POST['Dianacimiento'];
$Mesnacimiento = $_POST['Mesnacimiento'];
$Anonacimiento = $_POST['Anonacimiento'];
$Sexo = $_POST['Sexo'];

echo "Felicitaciones ".$Nombres." ".$Apellidos." ya te has registrado. <br>";
echo "Tu correo y contraseña son: <br>";
echo "Correo: ".$Correo."<br>"; 
echo "Contraseña: ".$Contraseña."<br>";

if($Sexo == "Mujer"){
    echo "Bienvenida <br>";
}elseif($Sexo == "Hombre"){
    echo "Bienvenido <br>";
}else{
    echo "Bienvenid@ <br>";
}

echo $Dianacimiento." - ".$Mesnacimiento." - ".$Anonacimiento;
