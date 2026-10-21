<?php

namespace DS\Component\Maintenance\Database;

use DS\Component\Maintenance\MaintenanceInterface;
use DS\Traits\DiInjection;

/**
 * DS-Framework
 *
 * @author    Dennis Stücken
 * @license   proprietary
 * @copyright Dennis Stücken
 * @link      https://www.dvlpr.de
 *
 * @version   $Version$
 * @package   DS\Component\Mail
 */
class ClearModelsMetaData extends \DS\Component\DiInjection implements MaintenanceInterface
{
    use DiInjection;
    
    /**
     * @return bool
     * @throws \Exception
     */
    public function execute(): bool
    {
        $this->serviceManager->getModelsMetadata()->reset();
        
        return true;
    }
}
