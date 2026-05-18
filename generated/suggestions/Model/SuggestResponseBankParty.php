<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseBankParty
{
    /**
     * @var null|SuggestionBankParty[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionBankParty[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionBankParty[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
