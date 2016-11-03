<?php

	function getCustomer($customer_id) {
		global $db;
		$customer_found = $db->fetch("SELECT * FROM customers WHERE id = ".$customer_id."");
		if ($customer_found != null) {
			$customer_found = array('customer'=>$customer_found);
		}
		else
		{
			$customer_found = array('customer'=>'not_found');
		}
		return $customer_found;
	}