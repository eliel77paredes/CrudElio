<?php
if (isset($_POST)) {
    $Descripcion = $_POST['Descripcion'];
    $peso = $_POST['peso'];
    $telefono = $_POST['telefono'];
    $destino = $_POST['destino'];
    require("conexion.php");

    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO paquete (Descripcion, peso, telefono, destino) VALUES (:De, :pe, :te, :de)");
        $query->bindParam(":De", $Descripcion);
        $query->bindParam(":pe", $peso);
        $query->bindParam(":te", $telefono);
        $query->bindParam(":de", $destino);
        $query->execute();
        $pdo = null;
        echo "ok";


    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE paquete SET Descripcion = :De, peso = :pe, telefono =:te, destino = :de WHERE id = :id");
        $query->bindParam(":Des", $Descripcion);
        $query->bindParam(":pe", $peso);
        $query->bindParam(":te", $telefono);
        $query->bindParam(":de", $destino);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}
