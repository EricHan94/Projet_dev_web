<?php 
namespace App;

	class Database{
		const data_Host = 'mysql:host=localhost; dbname=projet-web-s1;charset=utf8';
		const data_Name = 'root';
		
		private $connection;
		public function getConnection(): \PDO //return un class pdo, : void: return rien;  : string return un string, ...
		{
		
			try {
				$this->connection = new \PDO(self::data_Host, self::data_Name); //self gọi lại class chính nó, 		self::data_Host truy cập lại chính nó và lấy ra giá trịn data_Host

				$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				//return 'connection to the database ok';
				return $this->connection; 
			} catch (\Exception $e) {
				die('connexion error :'.$e->getMessage());
			}
			//return null;
		}

		private function checkConnection(): \PDO
  		{
        	if (null === $this->connection) {
            	return $this->getConnection();
        }

        	return $this->connection;
   	    }

    protected function createQuery(string $sql, array $parameters = []): \PDOStatement
    {
        if (empty($parameters)) {
            $result = $this->checkConnection()->query($sql);

            return $result;
        }
        $result = $this->checkConnection()->prepare($sql);
        $result->execute($parameters);

        return $result;
    }
	}

 ?>