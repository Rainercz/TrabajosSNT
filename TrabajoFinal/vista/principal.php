<?php 
    include("../controladores/conexion.php");
    include("includes/header.php");
?>
    <center>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>ID_DOCUMENTO</th>
                    <th>ASUNTO</th>
                    <th>TIPO DOC</th>
                    <th>FECHA_INGRESO</th>
                    <th>FECHA_SALIDA</th>
                    <th>OFICINA_SALIDA</th>
                    <th>ESTADO_DOC</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT  'id_doc', 'asunto', 'tipo_doc', 'fecha_ingreso', 
                                    'fecha_salida', 'oficina_salida', 'estado_doc' 
                            FROM oficina_rrhh";
                    $resultado = mysqli_query($cn, $sql);    
                    while($row = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td><?php echo $row['id_doc'] ?></td>
                            <td><?php echo $row['asunto'] ?></td>
                            <td><?php echo $row['tipo_doc'] ?></td>
                            <td><?php echo $row['fecha_ingreso'] ?></td>
                            <td><?php echo $row['fecha_salida'] ?></td>
                            <td><?php echo $row['oficina_salida'] ?></td>
                            <td><?php echo $row['estado_doc'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="SISCODI.php" class="border-white btn btn-primary">REGRESAR</a>
        </div>
    </center>
<?php
    include("includes/footers.php");
?>