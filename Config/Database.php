<?php


/**
 * Class Database
 */
class Database
{
    /**
     * @var string
     */
    private string $dsn;
    /**
     * @var string
     */
    private string $user;
    /**
     * @var string
     */
    private string $password;

    /**
     * @var PDO
     */
    public PDO $connection;

    /**
     * Database constructor.
     * @param $dsn
     * @param $user
     * @param $password
     */
    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;

        try {
            $this->connection = new PDO($this->dsn, $this->user, $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
