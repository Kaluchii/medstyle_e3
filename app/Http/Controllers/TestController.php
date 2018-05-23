<?php

namespace App\Http\Controllers;

use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class TestController extends Controller {


    private $extract;

    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $all_site = $this->extract->getBlock('all_site');
        view()->share([
            'all_site' => $all_site,
        ]);
	}

	public function selectAge(){
        $this->extract->tuneSelection('age')->like('show', true)->sortBy('sorter','ASC');

        $test = $this->extract->getBlock('testing_block');
		return view('front.test.select_age',[
			'test' => $test
		]);
	}

	public function getTest( $id ){
        $this->extract->tuneSelection('anket_item')->like('show', true)->sortBy('sorter','ASC');

        $test = $this->extract->getGroupItem('age', $id);
		return view('front.test.test',[
			'test' => $test,
		]);
	}

	public function getResult( $slug ){
        $this->extract->tuneSelection('anket_item')->like('show', true)->sortBy('sorter','ASC');

        $params = explode('q', $slug);

		if(count($params) > 1){

            $age_id = substr(array_shift($params), 1);
            $answers = $this->extract->getGroupItem('age', $age_id);
            $all_services = $this->extract->getBlock('services_block');

			return view('front.test.result',[
			    'yes_list' => $params,
				'answers' => $answers,
				'all_services' => $all_services
			]);
		}else{
			return view('front.test.no_result');
		}
	}

}
