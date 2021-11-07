<?php 
//clean the form data to prevent injections

/*
	Built in functions
		trim()
		stripslashes()
		htmlspecialchars()
		strip_tags()
		str_replace()

*/ 
		function validateFormData($formdata){
			$formdata = trim(stripslashes(htmlspecialchars(strip_tags(str_replace(array(
				'(',')'),'',$formdata)),ENT_QUOTES)));
			return $formdata;
		}

 ?>