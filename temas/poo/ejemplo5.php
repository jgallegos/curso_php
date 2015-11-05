<?

//Visibilidad de metodos

class MiClase
{
    // Declaración de un constructor public
    public function __construct() {
    }

    // Declaración de un método public
    public function MyPublic() {
    }

    // Declaración de un método protected
    protected function MyProtected() {
    }

    // Declaración de un método private
    private function MyPrivate() {
    }

    // Esto es public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MiClase;
$myclass->MyPublic();
$myclass->MyProtected();
$myclass->MyPrivate();
$myclass->Foo();