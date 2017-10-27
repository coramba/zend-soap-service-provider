<?php

namespace Coramba\Mocks\Zend\Soap\Client;

class DotNet extends \Coramba\Zend\Soap\Client\DotNet
{

    public function setLastMethod($lastMethod)
    {
        $this->lastMethod = $lastMethod;
    }

}
