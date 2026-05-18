<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseFiasAddress
{
    /**
     * @var null|SuggestionFiasAddress[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionFiasAddress[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionFiasAddress[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
