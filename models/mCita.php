<?php

require_once('config/conexionDB.php');
class mCita
{
    public function getCitas()
    {
        
    }
    public function citaTutor($idTutor, $idTutorado, $motivo, $fecha, $hora, $lugar)
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('INSERT INTO citas(motivo, fechaCita, horaCita, estadoCita) values(:motivo, :fecha, :hora, "1")');
        $qr->bindParam(':motivo',$motivo);
        $qr->bindParam(':fecha',$fecha);
        $qr->bindParam(':hora',$hora);
        $qr->execute();
        $idCita=mysql_insert_id();
        $qr2=$cn->prepare('INSERT INTO citatutortutorado(fidtutor, fidtutorado, fidcitas, lugarCita) values(:idTutor, :idTutorado, :idCita, :lugar)');
        $qr2->bindParam(':idTutor',$idTutor);
        $qr2->bindParam(':idTutorado',$idTutorado);
        $qr2->bindParam(':idCita',$idCita);
        $qr2->bindParam(':lugar',$lugar);
        $qr2->execute();
    }
}
?>