<?php
	class Constants {
		// Create form errors
		public static $passwordsDoNotMatch = "Your passwords do not match";
		public static $passwordNotAlphanumeric = "Your password can only contain numbers and letters";
		public static $passwordCharacters = "Your username must be between 5 and 30 characters";
		public static $emailInvalid = "Email is invalid";
		public static $emailsDoNotMatch = "Your emails do not match";
		public static $emailTaken = "This email is already in use";
		public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
		public static $firstNameCharacters = "Your first name must be between 2 and 25 characters";
		public static $usernameCharacters = "Your username must be between 5 and 25 characters";
		public static $usernameTaken = "This username is already taken";
		
		// Login form errors
		public static $loginFailed = "Your username or password was incorrect";
	}
?>