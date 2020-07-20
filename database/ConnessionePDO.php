<?php

class ConnessionePDO {

    //proprietà della classe (variabile)
    private $connessione = null;
    //proprietà della classe "NON Variabili": COSTANTI
    //le costanti definite all'interno di una classe si dichiarano con la kw const
    private const HOST = "192.168.64.2";
    private const USER = "its2020";
    private const PASS = "its2020";
    private const DB_NAME = "its_2020";

    public function connetti(){
        try {
           $this->connessione = new PDO("mysql:host=".self::HOST.";dbname=".self::DB_NAME, self::USER, self::PASS);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnessione(){
        return $this->connessione;
    }

}





?>