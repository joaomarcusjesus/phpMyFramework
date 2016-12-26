<?php 

namespace SON\Model;

abstract class table{

	protected $db;
	protected $table;

	public function __construct(\PDO $db){
		$this->db = $db;
	}

	protected function show(){
		$query = "SELECT * FROM {$this->table}";
		return $this->db->query($query);
	}
}