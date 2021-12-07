<?php 
namespace App;

	abstract class Database{
		const data_Host = 'mysql:host=localhost; dbname=projet-web-s1;charset=utf8';
		const data_Name = 'root';
		const DB_PASSWORD = '';
		
		private $connection;
		public function getConnection(): \PDO 
		{
		
			try {
				$this->connection = new \PDO(self::data_Host, self::data_Name, self::DB_PASSWORD); 
				$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				return $this->connection; 
			} catch (\Exception $e) {
				die('connexion error :'.$e->getMessage());
			}
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