<?php 
$Titulo = " Ejercicio 1"; 
include_once("../../../Estructura/cabecera.php");
?>

    
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="card text-center">
            <div class="card-header">
                <span id="tp"> TRABAJO PRACTICO 1 </span>
            </div>
          <div class="card-body">
              <p class="card-text">
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.
              </p>
          </div>
            <div class="card-footer text-muted">
                <span class="badge badge-secondary">EJ 1</span>
            </div>
      </div>
    <form action="accion.php" method="GET" id="tp1ej1" name="eje1"  data-toggle="validator" >
        <div class="form-row">
          <div class="col-md-3 mb-3">
                <label for="numero">Ingrese un numero </label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ejemplo: 7" required>
                <!--<div class="invalid-feedback">
                    Debe ingresar un numero
                </div> -->
          </div>
        </div>
        <button type="submit" class="btn btn-dark"> enviar </button>  
    </form>
</main>
<?php 

include_once("../../../Estructura/pie.php");
?>

