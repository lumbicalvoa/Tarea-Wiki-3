<?php 
require_once "./Vehiculo.php";
require_once "./Avion.php";

$vehivulo1 = new Vehiculo; 
$vehivulo1->setPropiedades('Mazda','New',2020);
$vehivulo1->setPropietario('Alfredo','Escudero','253471','LC1854');
$vehivulo1 -> set_CantPasajero(5);
$vehivulo1->getAtributosTotales();

$Avion1 = new Avion; 
$Avion1->setPropiedades('Luca Marcos','HC-149',2019);
$Avion1->setPropietario('American Airlines');
$Avion1->set_cantTurbinas(-120);
$Avion1->set_CantPasajero(400);
$Avion1->set_tipoCombustible('Boeing 35');
$Avion1->getAtributosTotales(); 
