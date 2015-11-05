<?
//Lo basico declración de clases con métodos y atributos

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}

$instancia = new ClaseSencilla();

$instancia->mostrarVar();
