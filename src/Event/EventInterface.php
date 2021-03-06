<?php
/**
 * @author: Radek Adamiec
 * Date: 22.05.15
 * Time: 10:46
 */

namespace AdamiecRadek\DDDBricksZF2\Event;


/**
 * Interface DomainEventInterface
 *
 * @package AdamiecRadek\DDDBricksZF2\Event
 */
interface EventInterface
{
    /**
     * @return string
     */
    public static function eventName();
}