<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{
    protected $data;
    protected $per_page;

    public function __construct(){
        parent::__construct();
        $this->data['page_title'] .= " - Dashboard";
        $this->per_page = env("DEFAULT_PER_PAGE", 10);
    }

    public function index(PageRequest $request){
        $this->data['page_title'] .= " - Statistics";

        return view('portal.index', $this->data);
    }
}