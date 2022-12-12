<?php


function excepcionPerson($error) 
{
    echo $error->getMessage() . PHP_EOL;
}
set_exception_handler('excepcionPerson');
class Vehiculo 
{
    
    private string $matricula;
    private string $marca;
    private string $modelo;
    private int $anyoFabric;
    private string $nomPropie;
    private string $apellidoPropie;
    private string $DNI;
    private int $cantPasajero;

    
    public function __construct()
    {
        $this->anyoFabric = 0;
        $this->marca = '';
        $this->modelo = '';
        $this->matricula = '';
        $this->nomPropie = '';
        $this->apellidoPropie = '';
        $this->DNI = '';
        $this->cantPasajero = 0;
    }
    
    private function esNumero($dato) 
    {
        if (!is_numeric($dato)) {
            throw new Exception(' numerico');
        } else {
            if ($dato < 1) {
                throw new Exception(' un valor positivo');
            } else {
                return 1;
            }
        }
    }
    
    public function __call($name, $arguments) 
    {
        if ($name = 'setPropietario') {
            if (count($arguments) == 1) {
                $this->nomPropie = $arguments[0];
            }
            if (count($arguments) == 2) {
                $this->nomPropie = $arguments[0];
                $this->apellidoPropie = $arguments[1];
            }
            if (count($arguments) == 3) {
                $this->nomPropie = $arguments[0];
                $this->apellidoPropie = $arguments[1];
                $this->DNI = $arguments[2];
            }
            if (count($arguments) == 4) {
                $this->nomPropie = $arguments[0];
                $this->apellidoPropie = $arguments[1];
                $this->DNI = $arguments[2];
                $this->matricula = $arguments[3];
            }
        }
    }
    public function setPropiedades($marca, $model, $anyo) 
    {
        $this->marca = $marca;
        $this->modelo = $model;
        if ($this->esNumero($anyo) == 1) {
            $this->anyoFabric = $anio;
        }
    }
    public function set_matricula(string $matr) 
    {
        $this->matricula = $matr;
    }
    public function set_marca(string $Marca) 
    {
        $this->marca = $Marca;
    }
    public function set_modelo(string $Modelo)
    {
        $this->modelo = $Modelo;
    }
    public function set_anyo($anyo) 
    {
        if ($this->esNumero($anio) == 1) {
            $this->anioFabric = $anyo;
        }
    }
    function set_CantPasajero($cantPasajero) 
    {
        if ($this->esNumero($cantPasajero) == 1) {
            $this->cantPasajero = $cantPasajero;
        }
    }
    // ? METODOS GETTERS
    public function get_matricula()
    {
        echo "matricula -> " . $this->matricula . "<br>";
    }
    public function get_marca()
    {
        echo "Marca -> " . $this->marca . "<br>";
    }
    public function get_modelo()
    {
        echo "Modelo -> " . $this->modelo . "<br>";
    }
    public function get_anyo()
    {
        echo "Año de fabricación -> " . $this->anyoFabric . "<br>";
    }
    public function get_propietario()
    {
        echo 'Nombre propietario: ' . ($this->nomPropie != '' ? $this->nomPropie : 'No añadido') . "<br>";
        echo 'Apellido Propietario: ' . ($this->apellidoPropie != '' ? $this->apellidoPropie : 'No añadido') . "<br>";
        echo 'DNI: ' . ($this->DNI != '' ? $this->DNI : 'No añadido') . "<br>";
    }
    public function get_CantPasajero()
    {
        echo "Cantidad de pasajeros : " . $this->cantPasajero;
    }
    public function getAtributosTotales()
    {
        echo "<hr>";
        $this->tipoVehiculo();
        echo "<h3 style = 'color: white;'>Propietario</h3>";
        $this->get_propietario();
        echo "<h3 style = 'color: orange;'>Información Vehículo</h3>";
        $this->get_marca();
        $this->get_modelo();
        $this->get_anyo();
        if ($this->matricula != '') {
            $this->get_matricula();
        }
        $this->tipoTransporte();
    }
    
    public function tipoTransporte()
    {
        if ($this->cantPasajero != 0) {
            if ($this->cantPasajero <= 5) {
                echo "<span style='color : black ; '>Este vehiculo es privado</span> <br>";
            } else {
                echo "<span style='color : blue ; '>Este vehiculo es público</span> <br>";
            }
        } else {
            throw new Exception('No se puso la cantidad de pasajeros ');
        }
    }
    public function tipoVehiculo()
    {
        if ($this->cantPasajero != 0) {
            if ($this->cantPasajero <= 5) {
                echo "<span style='color: red; '>Coche</span> <br>";
            } else if ($this->cantPasajero > 6 && $this->cantPasajero <= 120) {
                echo "<span style='color: red; '>Autobus</span> <br>";
            } elseif ($this->cantPasajero > 120 && $this->cantPasajero <= 666) {
                echo "<span style='color: red; '>Avión</span> <br>";
            } elseif ($this->cantPasajero > 666 &&  $this->cantPasajero <= 40000) {
                echo "<span style='color: red; '>Barco</span> <br>";
            }
        } else {
            throw new Exception('No se puso la cantidad de pasajeros ');
        }
    }
}