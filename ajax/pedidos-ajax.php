<?php 

$conexion = mysqli_connect("localhost","root","","lamulata");
$consulta="SELECT*FROM productos";
$resultado=mysqli_query($conexion,$consulta);
var_dump($resultado);


$query="SELECT*FROM productos";
if ($result = $conexion->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["nombre"];
        $field2name = $row["precio"];
        var_dump( $row);
         echo '<b>'.$field1name.'</b><br />';
       /* echo '<b>'.$field2name.'</b><br />'; */
  
    }

    /* free result set */
    $result->free();
}

?>