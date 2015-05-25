<?php 

class lead extends CI_Model {

	public function update_results($data)
	{
		$limit = $data["page"] * 8; 

		if(!empty($data["name"]) && !empty($data["to_date"]) && !empty($data["from_date"])){
		$query = "SELECT * FROM leads WHERE first_name LIKE ? AND registered_datetime BETWEEN ? AND ? LIMIT ?, 8";
		$query2 = "SELECT * FROM leads WHERE first_name LIKE ? AND registered_datetime BETWEEN ? AND ?";
		$data["name"] = $data["name"] . "%";
		$values = array($data["name"], $data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00", $limit);
		$values2 = array($data["name"], $data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00");
		$results = array();
		$results[] = $this->db->query($query, $values)->result_array();
		$results[] = count($this->db->query($query2, $values2)->result_array());
		return $results;

	}

	if(!empty($data["name"]) && !empty($data["to_date"]) && empty($data["from_date"])){
		$query = "SELECT * FROM leads WHERE first_name LIKE ? registered_datetime BETWEEN ? AND now() LIMIT ?, 8";
			$query2 = "SELECT * FROM leads WHERE first_name LIKE ? registered_datetime BETWEEN ? AND now()";
			$values = array($data["from_date"] . " 00:00:00", $limit);
			$values2 = array($data["from_date"] . " 00:00:00");
			$results = array();
		$results[] = $this->db->query($query, $values)->result_array();
		$results[] = count($this->db->query($query2, $values2)->result_array());
		return $results;

	}

		elseif(empty($data["name"]) && !empty($data["to_date"]) && !empty($data["from_date"]))
		{
			$query = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND ? LIMIT ?, 8";
			$query2 = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND ?";
			$values = array($data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00", $limit);
			$values = array($data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00");
			$results = array();
		$results[] = $this->db->query($query, $values)->result_array();
		$results[] = count($this->db->query($query2, $values2)->result_array());
		return $results;

		}

		elseif(!empty($data["name"]) && empty($data["to_date"]) && empty($data["from_date"]))
		{
			$data["name"] = $data["name"] . "%";
			$query = "SELECT * FROM leads WHERE (first_name LIKE ?) OR (last_name LIKE ?) LIMIT ?, 8";
			$query2 = "SELECT * FROM leads WHERE (first_name LIKE ?) OR (last_name LIKE ?)";
			$values = array($data["name"], $data["name"], $limit);
			$values2 = array($data["name"], $data["name"]);
			$results = array();
			$results[] = $this->db->query($query, $values)->result_array();
			$results[] = count($this->db->query($query2, $values2)->result_array());
			return $results;

		}
		elseif(empty($data["name"]) && empty($data["to_date"]) && !empty($data["from_date"]))
		{
			$query = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND now() LIMIT ?, 8";
			$query2 = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND now()";
			$values = array($data["from_date"] . " 00:00:00", $limit);
			$values2 = array($data["from_date"] . " 00:00:00");
			$results = array();
		$results[] = $this->db->query($query, $values)->result_array();
		$results[] = count($this->db->query($query2, $values2)->result_array());
		return $results;
		}

		elseif(empty($data["name"]) && !empty($data["to_date"]) && !empty($data["from_date"]))
		{
			$query = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND ? LIMIT ?, 8";
			$query2 = "SELECT * FROM leads WHERE registered_datetime BETWEEN ? AND ?";
			$values = array($data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00", $limit);
			$values2 = array($data["from_date"] . " 00:00:00", $data["to_date"] . " 00:00:00");
			$results = array();
		$results[] = $this->db->query($query, $values)->result_array();
		$results[] = count($this->db->query($query2, $values2)->result_array());
		return $results;
		}
		elseif(empty($data["name"]) && !empty($data["to_date"]) && empty($data["from_date"]))
		{
			echo "get rekt, figrue it out!";
		}
		else{
			$results = array();
		$results[] = $this->db->query("SELECT * FROM leads LIMIT $limit, 8")->result_array();
		$results[] = count($this->db->query("SELECT * FROM leads")->result_array());
		return $results;
		}
	}	

}