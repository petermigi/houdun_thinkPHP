<?php
//后台控制器
class IndexAction extends CommonAction{
    
    public function index(){
       $this->display();
    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/index');
    }

}