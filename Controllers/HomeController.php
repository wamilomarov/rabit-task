<?php


class HomeController extends BaseController
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
     * Home page. List of links
     * @throws Exception
     */
    public function index()
    {
        $data['links'] = [
            [
                'name' => 'Users',
                'link' => '/user'
            ],
            [
                'name' => 'Advertisements',
                'link' => 'advertisement'
            ]
        ];
        $this->set($data);
        $this->render("index");
    }
}
