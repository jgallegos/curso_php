<?

class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

class OtherClass extends MyClass
{
    public static $my_static = 'variable estática';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "<br />";
        echo self::$my_static . "<br />";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();
