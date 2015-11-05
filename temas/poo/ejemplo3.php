<?

class MiClase {
  
  protected $name = '';
   
   function __construct() {
       echo "En el constructor" . '<br />';
       $this->name = "MiClase";
   }

   function __destruct() {
       echo "Destruyendo " . $this->name . '<br />';
   }
}

$obj = new MiClase();