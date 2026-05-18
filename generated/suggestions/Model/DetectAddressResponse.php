<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class DetectAddressResponse
{
    /**
     * @var SuggestionAddress
     */
    protected $location;

    public function getLocation(): SuggestionAddress
    {
        return $this->location;
    }

    public function setLocation(SuggestionAddress $location): self
    {
        $this->location = $location;

        return $this;
    }
}
