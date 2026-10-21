<?php

namespace DS\Task\TaskHelpers;

use Phalcon\Logger\Adapter\Stream;
use Phalcon\Logger\Logger;

/**
 * DS-Framework
 *
 * Helper Task to enable logging within takss
 *
 * @author    Dennis Stücken
 * @license   proprietary
 * @copyright Dennis Stücken
 * @link      https://www.dvlpr.de
 *
 * @version   $Version$
 * @package   DS\Model
 */
trait LoggerTrait
{
    
    /**
     * @var Logger
     */
    protected $logger;
    
    /**
     * Initialize logging instance into $this->logger
     *
     * @param $path
     */
    protected function initLogger($path = '/tmp/task-log', $level = Logger::INFO)
    {
        // Initialize logging instance
        $this->logger = new Logger(
            'task', [
                'main' => new Stream(
                    $path, [
                        'mode' => 'ab',
                    ]
                ),
            ]
        );
        
        $this->logger->setLogLevel($level);
    }
}
