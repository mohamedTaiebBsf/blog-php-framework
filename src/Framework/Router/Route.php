<?php

namespace Framework\Router;

/**
 * Class Route
 * Represents a matched route
 */
class Route
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var callable
     */
    private $callback;

    /**
     * @var array
     */
    private $parameters;

    /**
     * Route constructor.
     * @param string $name
     * @param string|callable $callback
     * @param array $parameters
     */
    public function __construct(string $name, $callback, array $parameters)
    {
        $this->name = $name;
        $this->callback = $callback;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return callable
     */
    public function getCallback(): string|callable
    {
        return $this->callback;
    }

    /**
     * Retrieve the URL parameters
     *
     * @return string[]
     */
    public function getParams(): array
    {
        return $this->parameters;
    }
}
