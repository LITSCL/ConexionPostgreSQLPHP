<?php require_once "../models/dto/Persona.php"; ?>
<?php require_once "../models/dao/PersonaDAO.php"; ?>

<?php 
$daoPersona = new PersonaDAO();
$p = new Persona();

$p->setNombre($_GET["nombre"]);
$p->setEdad($_GET["edad"]);

if ($daoPersona->save($p) != false) {
    header("Location: " . "../index.php/?resultado=true");
}
else {
    header("Location: " . "../index.php/?resultado=false");
}
?>