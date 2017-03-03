<?php

class CompleteRange{
    public static function buid($coleccion){
        $inicio = $coleccion[0];
        $final = $coleccion[count($coleccion)-1];
        $resp = array();
        for ($i=$inicio;$i<=$final;$i++){
            array_push($resp, $i);
        }        
        return $resp;
    }
}

$c = new CompleteRange();
echo json_encode($c->buid(array(55,58,60)));