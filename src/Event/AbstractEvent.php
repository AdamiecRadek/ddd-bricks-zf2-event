<?php
/**
 * @author: Radek Adamiec
 * Date: 22.05.15
 * Time: 10:45
 */

namespace AdamiecRadek\DDDBricksZF2\Event;



use Zend\EventManager\EventInterface as ZendEventInterface;

/**
 * Class AbstractDomainEvent
 *
 * @package AdamiecRadek\DDDBricksZF2\Event
 */
abstract class AbstractEvent implements EventInterface, ZendEventInterface
{
    /**
     * @var \AGmakonts\DddBricks\Entity\EntityInterface
     */
    protected $target;

    /**
     * @var boolean
     */
    protected $propagationIsStopped;

    /**
     * @var \AGmakonts\STL\Number\Integer
     */
    protected $occurrenceTime;

    /**
     * @var \AGmakonts\STL\String\String
     */
    protected $identifier;




    /**
     * @return \AGmakonts\STL\Number\Integer
     */
    public function occurrenceTime()
    {
        return $this->occurrenceTime;

    }

    /**
     * @return \AGmakonts\STL\String\String
     */
    public function identifier()
    {
        return $this->identifier;

    }


    /**
     * Get target/context from which event was triggered
     *
     * @return \AGmakonts\DddBricks\Entity\EntityInterface
     */
    public function getTarget()
    {
        return $this->target;
    }


    /**
     * Set the event name
     *
     * @param  string $name
     *
     * @return void
     */
    final public function setName($name)
    {
        throw new \BadMethodCallException('Cannot change domain event name');
    }

    /**
     * Set the event target/context
     *
     * @param  null|string|object $target
     *
     * @return void
     */
    final public function setTarget($target)
    {
        throw new \BadMethodCallException('Cannot change domain event target');
    }


    /**
     * Set event parameters
     *
     * @param  string $params
     *
     * @return void
     */
    final public function setParams($params)
    {
        throw new \BadMethodCallException('Cannot change domain event params');
    }

    /**
     * Set a single parameter by key
     *
     * @param  string $name
     * @param  mixed  $value
     *
     * @return void
     */
    final public function setParam($name, $value)
    {
        throw new \BadMethodCallException('Cannot change domain event param');
    }

    /**
     * Get a single parameter by name
     *
     * @param  string $name
     * @param  mixed  $default Default value to return if parameter does not exist
     *
     * @return void
     */
    final public function getParam($name, $default = NULL)
    {
        throw new \BadMethodCallException('Cannot get domain event params individually');
    }

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param  bool $flag
     *
     * @return void
     */
    public function stopPropagation($flag = TRUE)
    {
        $this->propagationIsStopped = $flag;
    }

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped()
    {
        return $this->propagationIsStopped;
    }

    /**
     * Get event name
     *
     * @return string
     */
    public function getName()
    {
        return static::eventName();
    }

}