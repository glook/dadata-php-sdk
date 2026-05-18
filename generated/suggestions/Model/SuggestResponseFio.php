<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseFio
{
    /**
     * @var null|SuggestionFio[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionFio[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionFio[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
