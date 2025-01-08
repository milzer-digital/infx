<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasAirlineOutbound
{
    /**
     * The airline Outbound.
     */
    #[Field(
        position: 13,
        length: 3,
        validationRules: 'string|min:1|max:3'
    )]
    protected string $airlineOutbound;

    /**
     * Get the airline outbound of the Line.
     */
    public function getAirlineOutbound(): string
    {
        return $this->airlineOutbound;
    }

    /**
     * Set the airline outbound of the Line.
     *
     * @throws ReflectionException
     */
    public function setAirlineOutbound(string $airlineOutbound): static
    {
        $this->validate(
            property: 'airlineOutbound',
            value: $airlineOutbound,
        );

        $this->airlineOutbound = $airlineOutbound;

        return $this;
    }
}
