<?php

header('Content-Type: application/json');

require_once '../../modelo/Direccion.php';
require_once '../../modelo/Titular.php';
require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';


//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

if($req->Titular->Direccion==null){
    $resp->ItsOk=false;
    $resp->Mensaje=' la dirección es obligatoria ';
    }
    if ($req->Titular->NroDocumento==null){
        $resp->ItsOk=false;
        $resp->Mensaje=' la dirección es obligatoria ';
        }
        if($req->Titular->ApellidoNombre==null){
            $resp->ItsOk=false;
            $resp->Mensaje=' El nombre es obligatorio ';
            }

echo json_encode ($resp);