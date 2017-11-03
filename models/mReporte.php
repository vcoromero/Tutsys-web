<?php
require_once('config/conexionDB.php');

class mReporte
{
    public function getReportes()
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * FROM Reporte WHERE estadoGrafica=1');
        $qr->execute();
        if($qr) 
        {
            return $qr->fetchAll();
        }
    }
    
}
?>