<?php
require_once ('config/conexionDB.php');


class mAcceso{

    function validarLogin($matricula, $contrasena)
    {
        $cn=new conexionDB();
        $query=$cn-> prepare("SELECT * from usuario u 
            INNER  JOIN  persona p on u.fidPersona=p.idPersona INNER JOIN tipoUsuario tu on u.fidTipoUsuario=tu.idTipoUsuario 
            where u.matriculaUsuario=:matricula and u.contrasenaUsuario=:contrasena and u.estadoUsuario=1");
        $query->bindParam(':matricula',$matricula);
        $query->bindParam(':contrasena',$contrasena);
        $query->execute();
        if($query)
        {
            session_start(); 
            if($row= $query->fetch())
            {
                $_SESSION['idUsuario'] = $row['idUsuario'];
                $_SESSION['matriculaUsuario'] = $row['matriculaUsuario'];	
                $_SESSION['tipoUsuario'] =  ($row['nombreTipoUsuario']);
                $_SESSION['nombreUsuario'] = ($row['nombre'].' '.$row['appaterno'].' '.$row['apmaterno']);	
                $_SESSION['correoPersonal'] = ($row['correoPersonal']);
                $_SESSION['idPersona'] = $row['idPersona'];	
                $_SESSION['idTipoUsuario']=$row['idTipoUsuario'];
                
                header("location: home.php".$_POST[$_SESSION['idTipoUsuario']]);             
                return true;
            }
            else
            {
                $msg="<strong>¡ERROR AL LOGEARSE!:</strong> Verifique sus datos";
                header("location: index.php?&msg=".$msg);             
                return false;
            }
        }
    }
}