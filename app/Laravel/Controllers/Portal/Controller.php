<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Controllers\Controller as BaseController;

use Illuminate\Support\Facades\Request;

use Route;

class Controller extends BaseController{
    protected $data;

	public function __construct(){
		self::set_current_route();
		//self::set_loggedin_user();
		self::get_client_ip();
	}

	public function get_data(){
        $this->data['page_title'] = env("APP_NAME");
        
		return $this->data;
	}

	public function set_current_route(){
		 $this->data['current_route'] = Route::currentRouteName();
	}

    public function get_client_ip(){
		$this->data['ip'] = Request::header('X-Forward-For');
		
		if(!$this->data['ip']){
			$this->data['ip'] = Request::getClientIp();
		}
	}
}