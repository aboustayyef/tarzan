<?php 

class DB {

	private static $_instance = null;
	
	private $_pdo, 
			$_query, 
			$_error, 
			$_results, 
			$_count = 0;

	private function __construct(){
		try {
			$this->_pdo = new PDO('mysql:host=' . DB_HOST . ';dbname='. DB_NAME , DB_USER, DB_PASS);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public static function getInstance(){
		if (self::$_instance == null) {
			self::$_instance = new DB;

			// prepare for arabic
			self::$_instance->query("SET NAMES 'utf8'");
		    self::$_instance->query("SET CHARACTER SET utf8");
		    self::$_instance->query("ALTER DATABASE lebanese_blogs DEFAULT CHARACTER SET utf8 COLLATE=utf8_general_ci");
		}
		return self::$_instance;
	}

	public function query($sql, $params = array()){
		$this->_error = false;
		if ($this->_query = $this->_pdo->prepare($sql)){
			if(count($params)>0){
				foreach ($params as $key => $param) {
					$this->_query->bindValue($key+1, $param);
				}
			}
			if ($this->_query->execute()) {
				$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			} else {
				$this->_error = true;
			}
		}
		return $this;
	}

	public function action($action, $table, $where = array()){
		if (count($where) == 3 ) {
			$operators = array('=','>','<','<=', '>=', 'LIKE');

			$field		= $where[0];
			$operator 	= $where[1];
			$value 		= $where[2];

			if (in_array($operator, $operators)) {
				$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
				if (!$this->query($sql, array($value))->error()) {
					return $this;
				}
			} 
		}
		return false;
	}

	public function get($table, $where){
		return $this->action('SELECT *', $table, $where);
	}

	public function getAll($table){
		return $this->action('SELECT *', $table, array('1','=','1'));
	}

	public function delete($table, $where){
		return $this->action('DELETE', $table, $where);
	}

	public function insert($table, $fields = array()){
		if (count($fields)) {
			$keys = array_keys($fields);
			$values = str_repeat("?, ", count($fields)-1).'?';
			$params = array_values($fields);
			$sql = "INSERT INTO $table (`".implode('`, `', $keys)."`) VALUES ({$values})";
			//echo $sql;
			if (!$this->query($sql, $params)->error()) {
				return true;
			}
		}

		return false;
	}

	public function update($table, $id, $fields){
		$set = '';
		$x = 1;
		$params = array_values($fields);
		foreach ($fields as $name => $value) {
			$set .= "{$name} = ?";
			if ($x < count($fields)) {
				$set .= ', ';
			}
			$x++;
		}
		$sql = "UPDATE {$table} SET {$set} WHERE user_lb_id = {$id}";
		
		if(!$this->query($sql,$params)->error()){
			return true;
		}
		return false;
	}

	public function first(){
		$firstresult = $this->results();
		return $firstresult[0];
	}

	public function error(){
		return $this->_error;
	}
	public function count(){
		return $this->_count;
	}
	public function results(){
		return $this->_results;
	}
}

?>