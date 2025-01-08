<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasInfantPrice
{
    /**
     * The senior price of the line.
     */
    #[Field(
        position: 34,
        length: 12,
        validationRules: [
            'required',
            'regex:/^(?!0(\.0{2})?$)(\d{1,10}(\.\d{1,2})?)$/',
        ],
        validationMessages: [
            'regex' => 'The format of the price must be between 0.01 and 9999999999.99.',
        ]
    )]
    protected float $infantPrice;

    /**
     * Get the infant price of the line.
     */
    public function getInfantPrice(): float
    {
        return $this->infantPrice;
    }

    /**
     * Set the infant price of the line.
     *
     * @throws ReflectionException
     */
    public function setInfantPrice(float $price): static
    {
        $this->validate(
            property: 'infantPrice',
            value: (string) $price,
        );

        $this->infantPrice = $price;

        return $this;
    }
}
