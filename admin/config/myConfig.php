<?php 
	/**
	 * 
	 */
	class Connect
	{
		private $strCon = 'mysql:host=localhost;dbname=db_shop_shoes';
		private $user = 'root';
		private $passw = '';
		protected $pdo = null;
		function __construct()
		{
			try {
				$this->pdo = new PDO($this->strCon, $this->user, $this->passw);
				$this->pdo->query('SET NAMES utf8');
			} catch (PDOException $e) {
				exit();
			}
		}
	}

 ?>