<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); // utf-8 인코딩

$db = new mysqli("172.17.0.2", "root", "8829", "post_board");
$db->set_charset("utf8");

function mq($sql)
{
	global $db;
	return $db->query($sql);
}
