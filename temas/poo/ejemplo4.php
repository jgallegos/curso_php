<?

class MiClase
{
    public $public       = 'Public';
    protected $protected = 'Protected';
    private $private     = 'Private';

    function imprimir()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MiClase();
echo $obj->public;
echo $obj->protected;
echo $obj->private;
$obj->imprimir();