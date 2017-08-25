<?php
    
    class database
    {
    	private $hostdb = "localhost";
    	private $userdb = "root";
    	private $passdb = "";
    	private $namedb = "db_lr";
    	public $pdo;
    	
    	function __construct()
    	{
    	 if(!isset($this->pdo)){

    	 	try{
    	 		$link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb,$this->userdb,$this->passdb);
    	 		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	 		$link->exec("SET CHARACTER SET utf8");
    	 		$this->pdo=$link;
    	 	}catch(PDOEception $e){
              die("Falied to connect with database".$e->getMessagte());
    	 	}
    	 } 

    	}
    }





?>