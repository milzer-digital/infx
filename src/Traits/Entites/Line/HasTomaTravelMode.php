<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaTravelMode
{
    /**
     * The TOMA travel mode of the line.
     */
    #[Field(
        position: 54,
        length: 4,
        validationRules: ['string', 'min:1', 'max:4']
    )]
    protected string $tomaTravelMode;

    /**
     * Get the TOMA travel mode of the line.
     */
    public function getTomaTravelMode(): string
    {
        return $this->tomaTravelMode;
    }

    /**
     * Set the TOMA travel mode of the line.
     */
    public function setTomaTravelMode(string $value): static
    {
        $this->tomaTravelMode = $value;

        return $this;
    }
}
