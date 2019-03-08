<?php
namespace Classes\Database;

/**
 * Class Connection
 * Permet d'établir une connexion avec la base de données ...
 * ... et de lancer des requêtes SQL
 */
class Connection
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct()
    {
        // Infos nécessaires
        $dsn = 'mysql:host=localhost;dbname=bdd_mysql_command';
        $user = 'php_user_bdd';
        $pass = 'rjqwhMYlhNXmVOPc';

        $this->connect($dsn, $user, $pass);
    }

    /**
     * Etablit une connexion avec la base de données
     * @param string $dsn
     * @param string $user
     * @param string $pass
     */
    private function connect(string $dsn, string $user, string $pass): void
    {
        try {
            $this->pdo = new \PDO($dsn, $user, $pass, [
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET names utf8"
            ]);

        } catch (\PDOException $e) {
            echo "Erreur lors de la connexion : " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function query(string $query)
    {
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll();
    }

    public function findById(string $tableName, int $id): array
    {
        // Préparation
        $query = "SELECT * FROM ".$tableName." WHERE id = :id";
        $statement = $this->pdo->prepare($query);

        // Execution
        $statement->bindParam(':id',$id);
        $statement->execute();

        return $statement->fetchAll();

    }
}
