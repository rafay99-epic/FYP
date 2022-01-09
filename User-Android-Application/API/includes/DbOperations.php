<?php 

	class DbOperations{

		private $con; 

		function __construct(){

			require_once dirname(__FILE__).'/DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();

		}

		/*CRUD -> C -> CREATE */


		public function userLogin($username_email, $user_password){
			$stmt = $this->con->prepare("SELECT user_email FROM users WHERE user_email = ? AND user_password = ?");
			$stmt->bind_param("ss",$username,$password);
			$stmt->execute();
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}

		public function getUserByUsername($user_email){
			$stmt = $this->con->prepare("SELECT * FROM users WHERE user_email = ?");
			$stmt->bind_param("s",$username);
			$stmt->execute();
			return $stmt->get_result()->fetch_assoc();
		}
		

		private function isUserExist($username_email){
			$stmt = $this->con->prepare("SELECT user_email FROM users WHERE user_email = ?");
			$stmt->bind_param("ss", $username);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}

	}