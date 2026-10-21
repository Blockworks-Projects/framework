<?php
use Phalcon\Encryption\Crypt;

/**
 * DS-Framework
 *
 * Crypt Initialization
 *
 * @package DS
 * @version $Version$
 */
return function (\DS\Interfaces\GeneralApplication $application, Phalcon\Di\FactoryDefault $di)
{
    /**
     * Setup Crypt service
     *
     * @return Crypt
     */
    $di->setShared(
        'crypt',
        function () use ($application)
        {
            $config = $application->getConfig();

            // Phalcon 4 did not sign by default; Phalcon 5 does
            $crypt = new Crypt('aes-256-cfb', false);
            $crypt->setKey($config['crypt']['key']);

            return $crypt;
        }
    );

};