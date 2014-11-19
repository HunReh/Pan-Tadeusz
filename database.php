<?php

class Database{
	private $con;
	private $query;
	private $result;
	private $host="10.254.94.2";	
	private $user="s173393";
	private $password="";
	private $base="s173393";
	
	
	
	public function _construct($host, $user, $password, $base){
	
	$this->host=$host;
	$this->user=$user;
	$this->password=$password;
	$this->base=$base;
	}
	
	public function connect(){
		
	}
	
	public function execute($query){
	
	}
	
	

}

?>