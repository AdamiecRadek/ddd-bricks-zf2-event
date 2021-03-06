<?php
/**
 * @author: Radek Adamiec
 * Date: 22.05.15
 * Time: 10:45
 */

namespace AdamiecRadek\DDDBricksZF2\Event;


use AGmakonts\DddBricks\Entity\EntityInterface;
use AGmakonts\STL\DateTime\DateTime;
use AGmakonts\STL\String\String;
use AGmakonts\STL\String\Text;
use Rhumsaa\Uuid\Uuid;
use Zend\EventManager\EventInterface;

/**
 * Class AbstractDomainEvent
 *
 * @package AdamiecRadek\DDDBricksZF2\Event
 */
abstract class AbstractDomainEvent extends AbstractEvent implements EventInterface, EventInterface
{

    /**
     * @param \AGmakonts\DddBricks\Entity\EntityInterface $target
     */
    public function __construct(EntityInterface $target)
    {
        $this->target         = $target;
        $this->occurrenceTime = DateTime::get();
        $this->identifier     = Text::get(Uuid::uuid4()->toString());
    }


}