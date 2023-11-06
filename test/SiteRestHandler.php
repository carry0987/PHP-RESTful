<?php 
namespace carry0987\Test;

use carry0987\RESTful\RESTful;
use carry0987\Test\Site;
use SimpleXMLElement;

class SiteRestHandler extends RESTful
{
    private $siteService;

    public function __construct(Site $site)
    {
        $this->siteService = $site;
    }

    public function getAllSites()
    {
        $rawData = $this->siteService->getAllSite();
        $statusCode = empty($rawData) ? 404 : 200;
        $this->setHttpHeaders($_SERVER['HTTP_ACCEPT'], $statusCode);

        return $this->encodeResponse($rawData);
    }

    public function getSite(int $id)
    {
        $rawData = $this->siteService->getSite($id);
        $statusCode = empty($rawData) ? 404 : 200;
        $this->setHttpHeaders($_SERVER['HTTP_ACCEPT'], $statusCode);

        return $this->encodeResponse($rawData);
    }
}
