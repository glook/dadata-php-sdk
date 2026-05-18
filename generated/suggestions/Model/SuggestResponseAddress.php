<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseAddress
{
    /**
     * @var null|SuggestionAddress[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionAddress[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionAddress[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
