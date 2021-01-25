<?php namespace App\Controllers;

use App\Models\StoreModel;
class Store extends \CodeIgniter\Controller
{

	public function store_list() //맛집리스트
	{
		$model = new StoreModel();
		$data['store'] = $model->getList();
		echo view('templates/header',$data);
		echo view('store_list',$data);
		
	}
	public function store_detail() //맛집 상세페이지(리뷰목록,리뷰작성)
	{
		return view('store_detail');
	}


}
