<?php

class ClearPar{
    
    public static function build($parentesis){
        $cadena = "";
        
        $opcion = false;
        $opcion2 = false;
//        if (ord(substr($parentesis, 0,1))==40){
//            $cadena.=substr($parentesis, 0,1);            
//            $opcion = true;
//        }
        for ($i=0;$i< strlen($parentesis);$i++){
            $caracter = substr($parentesis, $i,1);
            
            $orden = ord($caracter);
            
            if ($orden==41){
                $opcion2 = false;
            }else if ($orden==40){
                $opcion2 = true;
            }
            
            if ($opcion == false && $opcion2 == true){
                $cadena.=$caracter; 
                $opcion = true;
            }else if ($opcion == true && $opcion2 == false){
                $cadena.=$caracter; 
                $opcion = false;
            }
            
            if ($i == strlen($parentesis)-1 && $orden==40){
                $cadena = substr($cadena, 0, strlen($cadena)-1);
            }
            
        }
        return $cadena;
    }
    
}

//   )()()()()))((
$cp = new ClearPar();
echo$cp->build(")()()()()))((((((())))))");
