<?php
require_once('config/conexionDB.php');

class mGrafica
{
    public function getGraficas()
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * FROM grafica WHERE estadoGrafica=1');
        $qr->execute();
        if($qr) 
        {
            return $qr->fetchAll();
        }
    }
    
}
?>