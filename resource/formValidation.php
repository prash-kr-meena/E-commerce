<?php 

function checkEmptyFields($formFieldsArray, $fieldLengthArray) {	

	$foundErrors = array();	// store errors, so as to pass it to the $formErrors 

	foreach ($formFieldsArray as $key => $value) {

		if( $_POST[$value] == NULL ) {
			$foundErrors[] = "<b>".$key."</b> is required !";
		}else{
			$field_name = $value; //value is from the array $formFieldArray
			$field_orignal_name = $key;
			$min_length_for_field = $fieldLengthArray[$value];	
			$foundErrors = array_merge($foundErrors, checkFieldsLength($field_name, $min_length_for_field, $field_orignal_name) );
			//print_r(checkFieldsLength($field_name, $min_length_for_field) );
			//rint_r($foundErrors); 
		}
	}
	return $foundErrors;
}

function checkValidCharacters($formFieldsArray) {

	$foundErrors = array();
	foreach ($formFieldsArray as $key => $value) {
		// use regex for this 
		// dont include spaces in username
	}
	return $foundErrors;
}

function checkFieldsLength($field_name, $min_length_for_field, $field_orignal_name) {
	$foundErrors = array();
	if( strlen($_POST[$field_name]) < $min_length_for_field ){		
		$foundErrors[] = "<b>".$field_orignal_name."</b> is too short !" ;
	}
	return $foundErrors;
}

?>