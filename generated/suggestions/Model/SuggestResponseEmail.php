<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseEmail
{
    /**
     * @var null|SuggestionEmail[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionEmail[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionEmail[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
