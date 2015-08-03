<?php
/**
 * @author: Radek Adamiec
 * Date: 22.05.15
 * Time: 10:45
 */

namespace AdamiecRadek\DDDBricksZF2\Event;


use AGmakonts\DddBricks\Service\ServiceInterface;
use AGmakonts\STL\DateTime\DateTime;
use AGmakonts\STL\String\Text;
use Rhumsaa\Uuid\Uuid;

/**
 * Class AbstractDomainEvent
 *
 * @package AdamiecRadek\DDDBricksZF2\Event
 */
abstract class AbstractServiceEvent extends AbstractEvent
{
    /**
     * @var array
     */
    protected $params;

    /**
     * @param \AGmakonts\DddBricks\Service\ServiceInterface $target
     * @param array                                         $params
     */
    public function __construct(ServiceInterface $target, array $params = [])
    {
        $this->target         = $target;
        $this->occurrenceTime = DateTime::get();
        $this->identifier     = Text::get(Uuid::uuid4()->toString());
        $this->params         = $params;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

}