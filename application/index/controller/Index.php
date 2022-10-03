<?php
namespace app\index\controller;
class Index
{
    public function index()
    {
        return "欢迎使用文件系统！！！！";
    }
    public function upload(){
        $data=file_get_contents("php://input");
        if(!is_dir('upload')){ 
            mkdir('upload');
        }
        $fp=fopen('upload/userpic.jpg','w+');
        $length=fwrite($fp,$data);
        fclose($fp);
        $flag='';
        if($length>0){
            $flag='上传成功';
        }else{
            $flag='上传失败';
        }
        return $flag;
    }
}
