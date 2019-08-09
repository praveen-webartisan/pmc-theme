<?php

/**
 * Base model
 */

class baseModel
{

	public function __construct()
	{
		$this->connect();
	}

	protected function connect()
	{
		$this->conn = new mysqli(DB["host"], DB["user"], DB["password"]);
		$this->selectDB(DB["database"]);
	}

	protected function selectDB($dbname)
	{
		$this->conn->select_db($dbname);
	}

	public function dbFetch($table, $condition = null)
	{
		$query 		=		"select * from " . $table;

		if(!empty($condition)){
			$where 	=		"";

			foreach($condition as $columnName => $value){
				if(!empty($where)){
					$where .= " and ";
				}

				$where .=	" $columnName = '$value'";
			}

			$query .=		" where " . $where;
		}

		$result = $this->conn->query($query);
		$fields = $result->fetch_fields();
		$rows = [];

		while($row = $result->fetch_assoc()){
			$record = [];

			foreach($fields as $column){
				$record[$column->name] = $row[$column->name];
			}

			$rows[] = (object) $record;
		}

		return $rows;
	}

	public function dbInsert($table, $data)
	{
		$query 		=		"insert into " . $table . " (";
		$values 	=		" values (";

		foreach($data as $column => $value){
			$query .=		"$column, ";
			$values .=		"'$value', ";
		}

		$query 		=		rtrim($query, ", ");
		$values 	=		rtrim($values, ", ");

		$query 	   .=		")" . $values . ")";
		$inserted 	=		false;

		if($this->conn->query($query) === true){
			$inserted =		$this->conn->insert_id;
		}

		return $inserted;
	}

	public function dbUpdate($table, $data, $where)
	{
		$query 		=		"update " . $table . " set ";
		$values 	=		"";
		$whereCond 	=		"";

		foreach($data as $column => $value){
			if(!empty($values)){
				$values .=	", ";
			}
			$values .=		"$column = '$value'";
		}

		foreach($where as $column => $value){
			if(!empty($whereCond)){
				$whereCond .=	" and";
			}
			$whereCond .=	" $column = '$value'";
		}

		$query 	   .=		$values . " where " . $whereCond;
		$inserted 	=		$this->conn->query($query) === true;

		return $inserted;
	}

	public function dbDelete($table, $where)
	{
		$query 		=		"delete from " . $table;
		$whereCond 	=		"";

		foreach($where as $column => $value){
			if(!empty($whereCond)){
				$whereCond .=	" and";
			}
			$whereCond .=	" $column = '$value'";
		}

		$query 	   .=		" where" . $whereCond;
		$inserted 	=		$this->conn->query($query) === true;

		return $inserted;
	}

	public function executeQuery($query)
	{
		$result 	=		false;
		$queryResult = $this->conn->query($query);

		if(strpos(strtolower($query), "select") == 0 && strpos(strtolower($query), "select") !== false){
			$fields = $queryResult->fetch_fields();
			$result = [];

			while($row = $queryResult->fetch_assoc()){
				$record = [];

				foreach($fields as $column){
					$record[$column->name] = $row[$column->name];
				}

				$result[] = (object) $record;
			}
		}elseif(strpos(strtolower($query), "insert") == 0 && strpos(strtolower($query), "insert") !== false){
			$result = $this->conn->insert_id;
		}else{
			$result = $queryResult === true;
		}

		return $result;
	}

}