<?php
namespace DS\Component;

/**
 * DS-Framework
 *
 * @author Dennis Stücken
 * @license proprietary

 * @copyright Dennis Stücken
 * @link https://www.dvlpr.de
 *
 * @version   $Version$
 * @package   DS\Component
 */
abstract class DiInjection
    implements \Phalcon\Di\InjectionAwareInterface
{
    use \DS\Traits\DiInjection;
}
