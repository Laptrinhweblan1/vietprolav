<?php
class controller{
	function view($controller_name,$controller_data=null){
		if(isset($controller_data)){
			foreach($controller_data as $key=>$val){
				$$key = $val;
			}
		}
		require "views/$controller_name.php";
	}
}