<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class BianjbController extends CommonController {
    protected $MENU_INDEX = 4;
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        parent::setMenu($this->MENU_INDEX);

    }
    public function index(){
        $this->display();
    }
    public function login(){
        $this->display();
    }
    public function register(){
        $this->display();
    }
}