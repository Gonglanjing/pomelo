<?php
header("Content-Type: application/json;charset=UTF-8");
require_once('Meting.php');
use Metowolf\Meting;
$id = (int)$_GET['id'];
if ($id) {
	$API = new Meting('netease');
	$data = $API->format(true)->url($id);
	$arr = array();
	$arr = json_decode($data);
	$url = str_replace('http://m7', 'https://m8', $arr->url);
	echo '{"url":"'.$url.'"}';
}else{
	echo 'false';
}