<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class CompanyWithEmail
{
    /**
     * @var Company
     */
    protected $company;

    /**
     * @var Email
     */
    protected $email;

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function setEmail(Email $email): self
    {
        $this->email = $email;

        return $this;
    }
}
