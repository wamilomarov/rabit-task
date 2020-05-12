<?php


/**
 * Class UserService
 */
class UserService
{
    /**
     * @var PDO
     */
    private PDO $connection;

    /**
     * UserService constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Get list of all users
     * @return array
     */
    public function getUsers()
    {
        $query = "SELECT * FROM users";

        $result = $this->connection->prepare($query);
        $result->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, User::class);
        $result->execute();
        return $result->fetchAll();
    }
}
