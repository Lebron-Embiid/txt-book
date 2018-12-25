<?php
include 'php_conn.php';
include 'setup.php';
//获取加盟信息
$name=$_POST['username'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];
$arr=array("status"=>0,"err"=>"");
if(empty($name)){
	$arr['err']="请填写姓名";
}
// if(empty($email)){
// 	$arr['err']="请填写邮箱";
// }
if(empty($tel)){
	$arr['err']="请填写手机号";
}
if(empty($message)){
	$arr['err']="请填写留言";
}
if(!preg_match('/^0?(13|14|15|17|18)[0-9]{9}$/',$phone)){
	$arr['err']="手机格式不正确";
}


// $arr1=mysql_result(mysql_query("select count(*) from atype_info where type_id=10 and cn_title='{$phone}'"),0);
// if($arr1!=0){
//     $arr['err']="提交失败！";
//     echo json_encode($arr);exit;
// }

//插入数据库
$time=date("Y-m-d H:i:s",time());
$sql="insert into atype_info(type_id,cn_name,cn_title,cn_keywords,cn_description,date1) VALUES('31','$name','$email','$tel','$message','$time')";
if(mysql_query($sql,$conn)){
    $arr['err']="信息提交成功";
    $arr['status']=1;
}else{
    $arr['err']="信息提交失败";
}

echo json_encode($arr);exit;
