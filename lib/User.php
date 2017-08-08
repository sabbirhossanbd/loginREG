<?php
    include_once 'Session.php';
    include 'database.php';
    class User{

    	private $db;
    	
    	function __construct(){

    		$this->db = new database();
    		
    	}
    }



?>