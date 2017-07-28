<?php 

include_once 'resource/formValidation.php';

if( isset($_POST['signin_sbt']) ){
	#validate the form
		#check empty fileds
		#check valid characters in name and email
		#check max and min length of email name password

	$formErrors_signin = array();	// to store errors

	$formFieldsArray = array('username'=>'u_name', 'password'=>'u_pass');
	$fieldLengthArray = array('u_name'=>4, 'u_pass'=>6);
	$formErrors_signin = array_merge( $formErrors_signin, checkEmptyFields($formFieldsArray, $fieldLengthArray) );
	//===>  after this i am checking if its not empty then whether the size of field is short or not
	//====>> so adding the below functionality into the function of this

		// $fieldLengthArray = array('u_name'=>4, 'u_pass'=>6);
		// $formErrors_signin = array_merge( $formErrors_signin, checkFieldsLength($fieldLengthArray) );

	// using above array $formFieldsArray
	$formErrors_signin = array_merge( $formErrors_signin, checkValidCharacters($formFieldsArray) );

	//==========================================================  VALIDATION COMPLETE  ====================================================================

	$u_name = $_POST['u_name'];
	$u_pass = $_POST['u_pass'];

	//echo "<p> --".$u_name."----".$u_pass."--</p>";
	
	}
else{
	//echo "hi there!";
}
?>