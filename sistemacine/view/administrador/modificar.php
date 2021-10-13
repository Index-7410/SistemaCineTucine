<?php

require_once("../../conexion/conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM peliculas WHERE id =" .$id;

$datos = Conexion::consultar($sql);

foreach ($datos as $items) {
}

?>

<?php
include("../../controller/administrador_session.php");
include("../../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<div class="container">
	<h2 class="white-text center">Modificar Pelicula</h2>
	<br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../model/model_modificar.php?id=<?=$items['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" value="<?php echo $items['nombre']; ?>" required="">
          <label for="nombre_add">Titulo:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="genero_add" name="genero_add" type="text" class="validate" value="<?php echo $items['genero'];?>" required="">
          <label for="genero_add">Genero:</label>
        </div>
		<div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input id="descripcion_add" name="descripcion_add" type="text" class="validate" value="<?php echo $items['descripcion'];?>" required=""></input>
          <label for="descripcion_add">Descripcion:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">insert_link</i>
          <input id="trailer_add" name="trailer_add" type="text" class="validate" value="<?php echo $items['trailer'];?>" required=""></input>
          <label for="trailer_add">Trailer:</label>
        </div>
         <div class="input-field col s12 l12">
          <i class="material-icons prefix">theaters</i>
          <input id="link_add" name="link_add" type="text" class="validate" value="<?php echo $items['link_pelicula'];?>" required=""></input>
          <label for="link_add">Link Pelicula:</label>
        </div>
      </div>
      <br>
       	<center><button class="btn waves-effect waves-light green darken-1 btn-large" type="submit" name="action">Actualizar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>
</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>