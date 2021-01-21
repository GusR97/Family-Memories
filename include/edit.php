<?php
 require 'conexion.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM automovil where id_automovil = $id";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $precio = $row['precio'];
    }
}
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];

    $query = "UPDATE automovil set marca = '$marca', modelo = '$modelo', precio = '$precio' WHERE id_automovil = $id";
    mysqli_query($conexion,$query);
    header("location: ../admin.php");
}
?>
<?php require_once 'header.php';?>
<button style='font-size:12px'><i class="fas fa-home"></i><br>Inicio</button>
<?php echo "Bienvenido: "?>
<a href="salir.php" class="btn btn-secondary">Cerrar Sesión</a>
</div>
<div class="container-fluid" id="contenedor1">
<div class="container" id="container5">
    <div class="card card-body" id="card1">
            <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                <div class="form-group">
                    <input type="text" name="marca" value="<?php echo $marca;?>" class="form-control" placeholder="Actualiza Marca" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="modelo" value="<?php echo $modelo;?>" class="form-control" placeholder="Actualiza Modelo" autofocus>
                </div>
                <div class="form-group">
                    <input type="text" name="precio" value="<?php echo $precio;?>" class="form-control" placeholder="Actualiza Precio" autofocus>
                </div>
                <button class="btn btn-success" name="update">Actualizar</button>
            </form>
    </div>
</div>

<?php require_once 'footer.php';?>