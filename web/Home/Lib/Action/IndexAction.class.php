<?php

require_once 'Home/Common/DDlog.class.php';

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        //echo "bbbb";
        $this->assign("oo", "wangqi");
    	$this->display("Index:index");
	}
  
}