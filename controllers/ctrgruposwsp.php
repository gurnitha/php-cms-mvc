<?php 

class Controladorwsp{

    static public function ctrGrupos(){

        $tabla="grupos_wsp";
        $respuesta = whatsapp::getGruposWsp($tabla);

        return $respuesta;
    }
}

?>