<?php
/**
 *  RESTful Demonstration example
 *  RESTful service class
 */
namespace carry0987\Test;

class Site
{
    private $sites = [
        1 => 'Google',
        2 => 'Facebook',
        3 => 'Twitter',
        4 => 'Instagram',
        5 => 'Youtube'
    ];

    public function getAllSite()
    {
        return $this->sites;
    }

    public function getSite(int $id)
    {
        if (array_key_exists($id, $this->sites)) {
            return [$id => $this->sites[$id]];
        }

        return [];
    }
}
