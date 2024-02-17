<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MailchimpMarketing\ApiClient as MailchimpMarketingApiClient;

class NewsletterController extends Controller
{
    public function addMember()
    {
        request()->validate([
            'email' => 'required|email'
        ]);
        
        $mailchimp = new MailchimpMarketingApiClient();
    
        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us8'
        ]);
    

        try {
            $mailchimp->lists->addListMember("4d966840da", [
                "email_address" => request('email'),
                "status" => "subscribed",
            ]);
        } catch (\Exception $e) {
            \Illuminate\Validation\ValidationException::withMessages(
                ['email' => 'This email could not be added to our newsletter list']
            );
        }
    
        return redirect('/')
            ->with('success', 'You are now signed up for our newslleter');
    }
}
