<?php
    include("../Config/Conexion.php");
    $sql = "SELECT*FROM categoria";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td>
                    <a href="../Model/EditarCategoria.php?id=<?php echo $mostrar['id']?>"><img src="../img/icons/editar.png" alt=""></a>
                    <a href="../Model/EliminarCategoria.php?id=">&#128465;</a>
            </td>
        </tr>
        <?php
    }
?>