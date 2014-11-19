<?php

class Database{
	private $con;
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
		$con=pg_connect("host=".$host."dbname="$this->base."user="->$this->user."password=".$this->password);
		
	}
	
	public function execute($query){
		return pg_exec($con, $query);
	}

}

?>