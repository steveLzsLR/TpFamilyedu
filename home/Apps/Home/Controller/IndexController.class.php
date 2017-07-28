<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	var_dump(__ROOT__);
        $this->display();
   }
}