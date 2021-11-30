<?php 

	class Database{
		const data_Host = 'mysql:host=localhost; dbname=projet-web-s1;charset=utf8';
		const data_Name = 'root';
		
		public function getConnection(): PDO //return un class pdo, : void: return rien;  : string return un string, ...
		{
		
			try {
				$connect = new PDO(self::data_Host, self::data_Name); //self gọi lại class chính nó, 		self::data_Host truy cập lại chính nó và lấy ra giá trịn data_Host

				$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//return 'connection to the database ok';
				return $connect; // return lại 1 PDO connect
			} catch (Exception $e) {
				die('connexion error :'.$e->getMessage());
			}
			//return null;
		}
	}

 ?>