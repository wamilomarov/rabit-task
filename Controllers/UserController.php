<?php


class UserController extends BaseController
{
    /**
     * @var ServicesContainer
     */
    private ServicesContainer $container;

    /**
     * AdvertisementController constructor.
     * @param ServicesContainer $container
     */
    public function __construct(ServicesContainer $container)
    {
        $this->container = $container;
    }

    /**
     * list of users
     * @throws Exception
     */
    public function index()
    {
        $data['users']= $this->container->userService->getUsers();
        $this->set($data);
        $this->render("index");
    }
}
