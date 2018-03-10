<?php
//后台控制器
class IndexAction extends CommonAction{
    
    //后台首页
    public function index(){
       $this->display();
    }

    //退出登录
    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/index');
    }

}