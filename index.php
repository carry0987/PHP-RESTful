<?php
require dirname(__FILE__).'/vendor/autoload.php';

// Include test classes
require dirname(__FILE__).'/test/Site.php';
require dirname(__FILE__).'/test/SiteRestHandler.php';

use carry0987\RESTful\RESTful;

// Test RESTful service
use carry0987\Test\SiteRestHandler;
use carry0987\Test\Site;

$requestMethod = $_SERVER['REQUEST_METHOD'];
$siteHandler = new SiteRestHandler(new Site());

if (RESTful::verifyHttpMethod()) {
    if (isset($_GET)) {
        $siteId = $_GET['id'] ?? null;
        if ($siteId) {
            $response = $siteHandler->getSite($siteId);
        } else {
            $response = $siteHandler->getAllSites();
        }
    }
}

exit($response ?? null);
