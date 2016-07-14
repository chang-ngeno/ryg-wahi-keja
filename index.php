<?php
	class person{
		var $first_name, $middle_name, $last_name;
		var $nid_number, $mobile_number;
		public function personName($first_name,$middle_name,$last_name){
			echo $first_name+$middle_name+$last_name;
		}
		
	}
?>
