<?php
require_once('config/conexionDB.php');

class mAviso
{
    public function getAvisos()
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * FROM aviso WHERE estadoAviso=1');
        $qr->execute();
        if($qr) 
        {
            return $qr->fetchAll();
        }
    }
    
}
?>