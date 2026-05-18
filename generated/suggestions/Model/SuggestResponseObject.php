<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseObject
{
    /**
     * @var null|SuggestionObject[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionObject[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionObject[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
