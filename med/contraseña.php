<h1>Cambiar Contraseña</h1>";
<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<h2>Contraseña actual</h2>

<input type="text" name="nueva" >
<h3>Contraseña nueva (4-60 caracteres)</h3>

<input type="text" name="confir" >
<h2>Confirmar contraseña nueva</h2>

<input type="text" name="lc" > <br><br> 

<input type="submit" name="guardar" value="guardar"> <input type="reset" value="cancelar">
</form>
<form action="" method="POST"></form>

<?php
if (isset($_POST["guardar"])) {

    $contraseña1=$_POST["nueva1"];
    $contraseña2=$_POST["nueva2"];
    preg_match('/^\w+$/',$contraseña1,$contraseña2); 
    if($contraseña1 == $contraseña2){
        echo "Contraseña guardada";
        echo preg_match($contraseña1, $contraseña2);
    }else{
        echo "Error al guardar";
    }

}