<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();

$sql="select * from cursos";
$info = $tempo->consultar($sql);

?>
<html>
    <head>
        <style>
        body {
 background-image: url(../imagenes/fondo_cursos.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #464646;
}
        </style>
        <title>Mostrar Cursos</title> 
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
        <div class="container"><br>
            <h4 class="text-light" style="text-align: center">LISTA DE CURSOS</h4>
            <br>
            <a href="registrarC.php" class="btn btn-light" style="font-weight: bold">Registrar Nuevo</a>
            <a href="menu.php" class="btn btn-warning" style="font-weight: bold">Regresar a Menu</a>
            <br><br>
            <table class="table table-hover table-bordered" bgcolor="white" >
                <thead bgcolor="#B9B329">
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>SIGLAS</th>
                        <th>ESTADO</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach ($info as $k) { ?>
                    <tr>
                        <td><?= $k['id'] ?></td>
                        <td><?= $k['descripcion'] ?></td>
                        <td><?= $k['siglas'] ?></td>
                        <td><?= $k['estado'] ?></td>
                        <td><a href="eliminarC.php?id=<?= $k['id'] ?> " class="btn btn-danger  btn-sm btn-block" style="font-weight: bold" onclick="return confirm('Seguro brother?')">Eliminar</a></td>
                        <td><a href="registrarC.php?id=<?= $k['id'] ?> " class="btn btn-info btn-sm btn-block" style="font-weight: bold">Editar</a></td>
                        </tr>
                     <?php }?>
                        
                </tbody>
            </table>   
        </div>
    </body>
</html>

