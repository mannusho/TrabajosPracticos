<?php 
$Titulo = " Ejercicio 8"; 
include_once("../../../Estructura/cabecera.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

    <div class="card text-center">
                <div class="card-header">
                    <span id="tp"> TRABAJO PRACTICO 1 </span>
                </div>

                <div class="card-body">
                    <p class="card-text">
                        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                        Agregar un botón para limpiar el formulario y volver a consultar.
                    </p>
                </div>

                <div class="card-footer text-muted">
                    <span class="badge badge-secondary">EJ 8</span>
                </div>
            </div>
            <br>
            <form action="accion.php" method="POST" id="tp1ej8" name="eje8" data-toggle="validator">
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                    <label for="age">Ingrese su edad </label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Ejemplo: 2" required>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-9 pt-0">&iquestEs estudiante? </legend>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante" value="S" >
                                    <label class="form-check-label" for="estudiante">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante" value="N">
                                    <label class="form-check-label" for="estudiante">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-dark"> enviar </button>
            </form>
</main>
    <?php 
        include_once("../../../Estructura/pie.php");
    ?>

