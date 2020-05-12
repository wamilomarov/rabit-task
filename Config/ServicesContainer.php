<?php


/**
 * Container of all services.
 * Class ServicesContainer
 */
class ServicesContainer
{
    /**
     * @var AdvertisementService
     */
    public AdvertisementService $advertisementService;
    /**
     * @var UserService
     */
    public UserService $userService;

    /**
     * ServicesContainer constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->advertisementService = new AdvertisementService($connection);
        $this->userService = new UserService($connection);
    }
}
