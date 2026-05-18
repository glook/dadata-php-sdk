<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseDelivery
{
    /**
     * @var null|DeliverySuggestion[]
     */
    protected $suggestions;

    /**
     * @return null|DeliverySuggestion[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|DeliverySuggestion[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
