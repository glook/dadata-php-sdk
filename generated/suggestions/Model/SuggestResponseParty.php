<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseParty
{
    /**
     * @var null|SuggestionParty[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionParty[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionParty[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
