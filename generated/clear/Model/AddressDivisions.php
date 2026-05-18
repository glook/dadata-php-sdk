<?php

namespace Glook\Dadata\Generated\Clear\Model;

class AddressDivisions
{
    /**
     * @var null|AdministrativeDivision
     */
    protected $administrative;

    public function getAdministrative(): ?AdministrativeDivision
    {
        return $this->administrative;
    }

    public function setAdministrative(?AdministrativeDivision $administrative): self
    {
        $this->administrative = $administrative;

        return $this;
    }
}
