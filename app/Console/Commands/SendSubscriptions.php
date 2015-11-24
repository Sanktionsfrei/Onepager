<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendSubscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the Newsletter subscriptions of the last 24 hours to all admins.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $subscripts = DB::table('newsletter')->whereDate('created_at', '>', Carbon::now()->subHours(24)->toDateTimeString())->get();

        Mail::send('emails.admin.subscriptions', ['subscriptions' =>$subscripts], function ($message) {
            $message->from('noreply@sanktionsfrei.de');
            $message->to('helena@sanktionsfrei.de')->subject('Newsletter Subscriptions der letzten 24h.');
        });
    }
}
