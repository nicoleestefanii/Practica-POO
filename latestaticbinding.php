<?php

class A {
    public static function miFuncion() {
        // Mostrará el nombre de la clase actual
        echo __CLASS__;
    }

    public static function otraFuncion() {
        self::miFuncion();
    }
}

class B extends A {
    public static function miFuncion() {
        // Mostrará el nombre de la clase actual
        echo __CLASS__;
    }
}

B::otraFuncion();