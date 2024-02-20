<?php

namespace App\Services;

use App\Config\MailchimpConfig;
use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function __construct(private MailchimpConfig $config) {}
    
    public function subscribe(string $email, string $list = null)
    {
        $list ??= $this->config->getListId(); 
        
        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }

    private function client()
    {
        $mailchimp = new ApiClient();
    
        return $mailchimp->setConfig([
            'apiKey' => $this->config->getApiKey(),
            'server' => 'us8'
        ]);
    }
}
