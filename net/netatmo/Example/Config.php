<?php
namespace net\netatmo\Example {
	
	use net\netatmo\IClientUser;
	require_once '../IClientUser.php';
	
	class ExampleClient implements IClientUser
	{
		const CLIENT_ID = "your_client_id";
		const CLIENT_SECRET = "your_client_secret";
		const TEST_USERNAME = "your_username";
		const TEST_PASSWORD = "your_pwd";
		
		/* (non-PHPdoc)
		 * @see \net\netatmo\IClientUser::GetClientID()
		 */
		/**
		 * Client-ID.
		 * @return \string current client-id.
		 */
		public function GetClientID() {
			return ExampleClient::CLIENT_ID;
		}
		 
		/* (non-PHPdoc)
		 * @see \net\netatmo\IClientUser::GetClientSecret()
		 */
		/**
		 * Client-Secret.
		 * @return \string current client secret.
		 */
		public function GetClientSecret() {
			return ExampleClient::CLIENT_SECRET;
		}
				
		/* (non-PHPdoc)
		 * @see \net\netatmo\IClientUser::GetUsername()
		 */
		/**
		 * User name.
		 * @return \string current user name.
		 */
		public function GetUsername() {
			return ExampleClient::TEST_USERNAME;
		}
		
		/* (non-PHPdoc)
		 * @see \net\netatmo\IClientUser::GetPassword()
		 */
		/**
		 * User password.
		 * @return \string current user password
		 */
		public function GetPassword() {
			return ExampleClient::TEST_PASSWORD;
		}
		
		
	}

}
?>
