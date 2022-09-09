<?php 


class DB {
    public static ?DB $instance = null;

    private function __construct(private array $args) {
        echo "Db is instanciated";

    }

    public static function getInstance(array $args): DB { 
        if(!self::$instance){

            self::$instance = new DB($args);

        }

        return self::$instance;

    }

}