<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestResponseCompanyWithEmail
{
    /**
     * @var null|SuggestionCompanyWithEmail[]
     */
    protected $suggestions;

    /**
     * @return null|SuggestionCompanyWithEmail[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param null|SuggestionCompanyWithEmail[] $suggestions
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;

        return $this;
    }
}
