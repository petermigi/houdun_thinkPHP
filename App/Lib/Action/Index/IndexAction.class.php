<?php
//前台控制器
class IndexAction extends Action{
    
    //首页视图
    public function index(){
       
        $wish = M('wish')->select();        
       $this->assign('wish',$wish)->display();   
    }

    
    //ajax异步请求发布处理
    public function handle(){
        if(!IS_AJAX){
            halt('页面不存在');           
        }       
        
        $data = array(
            'username' => I('username'),
            'content' => I('content'),
            'time' => time()      
        );
       
      $id=M('wish')->data($data)->add();

        if($id){
            $data['id']=$id;
            $data['content']=replace_phiz($data['content']); 
            $data['time']=date('Y-m-d H:i', $data['time'] );
            $data['status']=1;
            $this->ajaxReturn($data,'json');


        }else{
            $this->ajaxReturn(array('status'=>0),'json');
        }

           


    }

}