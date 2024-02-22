<?php

namespace App\Config;

use Illuminate\Contracts\Config\Repository;

class MailchimpConfig
{
    public function __construct(public Repository $repository) 
    {}

    public function getApiKey(): string
    {
       return $this->repository->get('services.mailchimp.key');
    }
    
    
    public function getListId(): string
    {
        return $this->repository->get('services.mailchimp.list.subscribers');
    }
}
