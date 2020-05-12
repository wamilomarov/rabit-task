<?php


/**
 * Class AdvertisementController
 */
class AdvertisementController extends BaseController
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
     * list of ads
     * @throws Exception
     */
    public function index()
    {
        $data['ads']= $this->container->advertisementService->getAdvertisements();
        $this->set($data);
        $this->render("index");
    }
}
