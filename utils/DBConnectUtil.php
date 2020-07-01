<?php
	$mysqli = new mysqli('localhost','root','','bstory');//tao dt de connect
	$mysqli->set_charset('utf8');//set utf8-> dung tieng viet
	//Kiểm tra và in ra thông tin lỗi nếu có
	if(mysqli_connect_error()){
		echo 'Có lỗi khi kết nối database :'.mysqli_connect_errno();
	}
?>