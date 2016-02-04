<?php

namespace App\Services;

use Mailchimp;

class NewsletterManager
{
    protected $mailchimp;

    protected $listId = 'cd3e7bdaa1';


    /**
     * Pull the Mailchimp-instance (including API-key) from the IoC-container.
     * @param Mailchimp $mailchimp
     */
    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * Access the mailchimp lists API
     */
    public function addEmailToList($email)
    {
        try {
            $this->mailchimp->debug = true;

            $this->mailchimp
                ->lists
                ->subscribe(
                    $this->listId,
                    ['email' => $email]
                );
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            \Log::info('mail already subscribed');
        } catch (\Mailchimp_Error $e) {
            \Log::error($e->getMessage());
        }
    }


}