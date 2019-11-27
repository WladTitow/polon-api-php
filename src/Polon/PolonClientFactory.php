<?php

namespace Polon;

use Polon\PolonClient;
use Polon\PolonClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Http\Adapter\Guzzle6\Client;

use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class PolonClientFactory
{

    public static function factory(string $wsdl, string $login, string $password) : \Polon\PolonClient
    {        
        $handler = HttPlugHandle::createForClient(
           Client::createWithConfig(['headers' => ['User-Agent' => 'testing/1.0'], 'verify' => false])
        );
        $handler->addMiddleware(new BasicAuthMiddleware($login, $password));
        
        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(PolonClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new PolonClient($engine, $eventDispatcher);
    }


}

