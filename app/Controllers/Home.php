<?php

namespace App\Controllers;
use App\Models\Properties;

class Home extends BaseController
{
    public function index()
    {
		$db = db_connect();
		$model = new Properties($db);
			
		//check for ajax request
		if ($this->request->isAJAX()) {
			parse_str($_SERVER['QUERY_STRING'], $_GET);
			$results = $model->filterData($_GET);
			foreach ($results as $row) {
				echo '<div class="box">
				  <div class="img-box">
					<img src="images/s-'. rand(1,6) .'.jpg" alt="">
				  </div>
				  
				  <div class="detail-box">
					<h6>
					  '. $row->title . ' - ' . $row->address .'
					</h6>
					<p>
					  '. $row->size .' m²
					</p>
					<p>
					  '. $row->price .' €
					</p>
				  </div>
				</div>';
			}
		} else {
			$results = $model->filterData();
			$data = [
				"results" => $results
			];
			echo view('listing', $data);
		}
    }
}
