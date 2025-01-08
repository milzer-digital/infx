<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasMaximumChildrenOccupancy
{
    /**
     * The number of children occupancy.
     */
    #[Field(
        position: 26,
        length: 1,
        validationRules: 'int|min:1|max:9'
    )]
    protected int $maximumChildrenOccupancy;

    /**
     * Get the maximum children occupancy of the Line.
     */
    public function getMaximumChildrenOccupancy(): int
    {
        return $this->maximumChildrenOccupancy;
    }

    /**
     * Set the maximum children occupancy of the Line.
     *
     * @throws ReflectionException
     */
    public function setMaximumChildrenOccupancy(int $count): static
    {
        $this->validate(
            property: 'maximumChildrenOccupancy',
            value: $count,
        );

        $this->maximumChildrenOccupancy = $count;

        return $this;
    }
}
