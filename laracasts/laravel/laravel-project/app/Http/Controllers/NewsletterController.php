<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use \Illuminate\Validation\ValidationException;
use Exception;

class NewsletterController extends Controller
{
    public function __construct(
        private Newsletter $client
    ) {}

    public function addMember()
    {
        request()->validate([
            'email' => 'required|email'
        ]);
        
        try {
            $this->client->subscribe(request('email'));
        } catch (Exception $e) {
            ValidationException::withMessages(
                ['email' => 'This email could not be added to our newsletter list']
            );
        }
    
        return redirect('/')
            ->with('success', 'You are now signed up for our newslleter');
    }
}
