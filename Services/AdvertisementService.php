<?php


/**
 * Class AdvertisementService
 * All database actions related to ads
 */
class AdvertisementService
{
    /**
     * @var PDO
     */
    private PDO $connection;

    /**
     * AdvertisementService constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Get list of all ads with names of authors
     * @throws Exception
     */
    public function getAdvertisements()
    {
        $query = "SELECT ads.*, u.name AS author FROM advertisements AS ads LEFT JOIN users AS u ON u.id = ads.user_id";

        $result = $this->connection->prepare($query);
        $result->setFetchMode(PDO::FETCH_CLASS, Advertisement::class);
        try {
            $result->execute();
            return $result->fetchAll();
        }
        catch (Exception $exception)
        {
            throw $exception;
        }

    }
}
