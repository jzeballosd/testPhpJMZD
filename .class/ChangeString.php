<?php

class ChangeString{
    
    public static function build($palabra){
        $arrayPalabra = str_split($palabra);
        $abecedario = explode(","," ,a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,Ñ,O,P,Q,R,S,T,U,V,W,X,Y,Z");
        $nuevaPalabra = array();
        foreach ($arrayPalabra as $letra){
            $indice = array_search($letra, $abecedario);
            if ($indice>0){
                if ($indice==54){
                    $indice=0;
                };
                array_push($nuevaPalabra, $abecedario[$indice+1]);
            }else{
                array_push($nuevaPalabra, $letra);
            }
        }
        $nuevaPalabra = implode("", $nuevaPalabra);
        return $nuevaPalabra;
    }
    
}


$chstr = new ChangeString();

print_r( $chstr->build("123 abcd*3"));

//echo $chstr->build("jesucito")." | FIN";
