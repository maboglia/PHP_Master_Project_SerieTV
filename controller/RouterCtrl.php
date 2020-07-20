<?php 

/**
 * Creo una classe per gestire le rotte (url) come oggetti
 */
class RouterCtrl {
	
	/**
    * Dichiaro la variabile rotta 
    */
	public $route;
	
	private const PREFIX = './view/';
	private const SUFFIX = '.php';
	
	/**
    * Quando costruisco l'oggetto assegno la rotta in argomento oppure home
    * 
    */
    public function __construct($rotta = 'home')
    {
        $this->route = self::PREFIX.$rotta.self::SUFFIX;
    }
    public function cambia($nuovaRotta){
       return $this->route =  self::PREFIX.$nuovaRotta.self::SUFFIX;
    }
}
?>