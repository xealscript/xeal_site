<?php
include('services/emailservice.php');
if($_REQUEST['act'] == 'contact')
{
$obj = new Emailservice();
$res = $obj->contact_us($_REQUEST['email'],$_REQUEST['name'],$_REQUEST['message']);
if($res == 1)
{
$resp = array('status' => $res,'msg'=>'Message Sent');
}
else
{
$resp = array('status' => $res,'msg'=>'Something went Wrong');	
}
echo json_encode($resp);
}

 ?>