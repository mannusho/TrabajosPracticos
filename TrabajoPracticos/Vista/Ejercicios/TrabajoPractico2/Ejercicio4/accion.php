<?php 
    $Titulo = " Ejercicio 8"; 
    include_once("../../../Estructura/cabecera.php");
?>
<div>
<?php 
    $datos = data_submitted();
    $obj = new control_tp2_ej4();

    $respuesta = $obj->verInformacion($datos);

?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">LA RESPUESTA ES: </h4>
        <p>Aww yeah, <?php echo $respuesta ?> </p>
        <hr>
        <p class="mb-0">Now... PAGA LA PRATA.</p>
    </div>
</div>


<?php 

include_once("../../../Estructura/pie.php");
?>