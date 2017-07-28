<?php 

include_once 'resource/formValidation.php';

if( isset($_POST['signup_sbt']) ){
	#validate the form
		#check empty fileds
		#check valid characters in name and email
		#check max and min length of email name password

	$formErrors_signup = array();	// to store errors

	$formFieldsArray = array('email'=>'u_email', 'username'=>'u_name', 'password'=>'u_pass');
	$fieldLengthArray = array('u_email'=>15, 'u_name'=>4, 'u_pass'=>6);
	$formErrors_signup = array_merge( $formErrors_signup, checkEmptyFields($formFieldsArray, $fieldLengthArray) );
	//===>  after this i am checking if its not empty then whether the size of field is short or not
	//====>> so adding the below functionality into the function of this

		// $fieldLengthArray = array('u_name'=>4, 'u_pass'=>6);
		// $formErrors_signup = array_merge( $formErrors_signup, checkFieldsLength($fieldLengthArray) );

	// using above array $formFieldsArray
	$formErrors_signup = array_merge( $formErrors_signup, checkValidCharacters($formFieldsArray) );

	//==========================================================  VALIDATION COMPLETE  ====================================================================

	$u_email = $_POST['u_email'];
	$u_name = $_POST['u_name'];
	$u_pass = $_POST['u_pass'];

	//echo "<p> --".$u_name."----".$u_pass."-- --".$u_email."</p>";
	
	}
else{
	//echo "hi there!";
}
?>