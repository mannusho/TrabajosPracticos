<?php

    class control_ej2{
        public function verInformacion ($datos){
            $lunes = $datos["lunes"];
            $martes = $datos["martes"];
            $miercoles = $datos["miercoles"];
            $jueves = $datos["jueves"];
            $viernes = $datos["viernes"];

            $sumatoria = $lunes + $martes + $miercoles + $jueves + $viernes;

            $texto = "<p> El total de horas a la semana que hay de clases es de: ".$sumatoria." hrs </p><br>";
           
            return $texto;
                        
        }
    }

?>