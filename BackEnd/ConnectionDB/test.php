<?php
require_once('DB_classes.php');

$nguoidung = new NguoiDungBUS();
// $nguoidung->delete_by_id("ND2");
 $nguoidung->add_new(array('ND3', 'Le', 'Thanh Huy', 'huyhoahien86@gmail.com'));

show_DataBUS_as_Table(new NguoiDungBUS());
die('LOL');

// Check trùng bằng getList