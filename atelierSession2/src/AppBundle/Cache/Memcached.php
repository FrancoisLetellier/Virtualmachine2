<?php

namespace AppBundle\Cache;

class Memcached extends \Memcached {

    function construct($persistent_id)
    {
        parent::construct($persistent_id);
    }
    /**
     * prevent adding of new servers. We're persistent!
     */
    public function addServers(array $servers)
    {
        if (0 == count($this->getServerList())) {
            parent::addServers($servers);
        }
    }
}