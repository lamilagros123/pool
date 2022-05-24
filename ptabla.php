<!DOCTYPE html>
        <html>
        <head>
                <title>tabla</title>
        </head>
        <body>
        <?php
        require "registro.php";

$conexion = new mysqli($host,$user,$pass,$baseDatos);

if($conexion->connect_errno)
{
    echo "Error de conexion de la base datos".$conexion->connect_error;
    exit();
}
$sql = "select * from gatos";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1 align="center">LISTADO DE clientes</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>mascota</td>
        <td>cliente</td>
        <td>Servicio</td>
        <td>Edad</td>
        
    </tr>
    <?php 
        while($datos=$resultado->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["mascota"]?></td>
                <td><?php echo $datos["cliente"]?></td>
                <td><?php echo $datos["Servicio"]?></td>
                <td><?php echo $datos["Edad"]?></td>
                
            </tr>
            <?php   
        }

     ?>
    </table>

</body>
</html>
        </body>
        </html>