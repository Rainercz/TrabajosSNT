<?php 
    include("../controladores/conexion.php");
    include("includes/header_consulta.php");
?>
<center>
    <div class="col-md-5">
        <table class="table table-bordered">
            <thead>
                <?php
                $query = "SELECT*FROM general";
                $resultado = mysqli_query($cn, $query);
                while($row = mysqli_fetch_array($resultado)) { ?>
                <h3 class="rounded bg-warning mt-5 p-2">RESULTADO DE LA BUSQUEDA</h3>
                <TR>
                    <TH>ASUNTO</TH>
                    <TD class="text-center"><?php echo $row['asunto'] ?></TD>
                </TR>
                <TR>
                    <TH>TIPO_DOC</TH>
                    <TD class="text-center"><?php echo $row['tipo_doc'] ?></TD>
                </TR>
                <TR>
                    <TH>FECHA_INGRESO</TH>
                    <TD class="text-center"><?php echo $row['fecha_ingreso'] ?></TD>
                </TR>
                <TR>
                    <TH>ESTADO_DOC</TH>
                    <TD class="text-center table-success"><?php echo $row['estado_doc'] ?></TD>
                </TR>
                <TR>
                    <TH>OFICINA</TH>
                    <TD class="text-center"><?php echo $row['oficina'] ?></TD>
                </TR>
                <?php } ?>
            </thead>
        </table>
    </div>
</center>

<?php
    include("includes/footers.php");
?>