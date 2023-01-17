<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class Properties
{
	protected $db;
	
	public function __construct(ConnectionInterface &$db)
    {
		$this->db = & $db;
    }
	
	public function filterData($data=[])
    {
		$table = $this->db->table('properties');

		if (!empty($data['minPrice'])) {
			$table->where('price >=', $data['minPrice']);
		}
		
		if (!empty($data['maxPrice'])) {
			$table->where('price <=', $data['maxPrice']);
		}
		
		if (!empty($data['minSize'])) {
			$table->where('size >=', $data['minSize']);
		}
		
		if (!empty($data['maxSize'])) {
			$table->where('size <=', $data['maxSize']);
		}
		
		if (!isset($data['pageno'])) {
			$data['pageno'] = 1;
		}
		
		if (!isset($data['perpage'])) {
			$data['perpage'] = 6;
		}
		
		$sort = "asc";
		if (isset($data['sortBy']) && $data['sortBy'] == 2) {
			$sort = "desc";
		}
		$table->orderBy('price', $sort);
		$table->limit($data['perpage'], $data['perpage']*($data['pageno']-1));
		
		$data = $table->get()->getResult();
		return $data;
    }
}
