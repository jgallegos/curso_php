<?php

//clases y metodos finales

class BaseClass {
   public function test() {
       echo "llamada a BaseClass::test()\n";
   }
   
   final public function moreTesting() {
       echo "llamada a BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "llamada a ChildClass::moreTesting()\n";
   }
}

