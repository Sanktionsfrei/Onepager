<?php


namespace App\Http\Controllers;


use App\Newsletter;
use App\Services\DonationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use App\Services\NewsletterManager;
use Symfony\Component\DomCrawler\Crawler;

class WelcomeController extends Controller
{

    public function show(DonationService $donationService)
    {
        $options = Config::get('onepager.options');

        $statusArray = $donationService->getDonationStatus();

        $displayString = "{$statusArray['amountTotal']} von 150.000 € finanziert, davon {$statusArray['amountSt']} € über Startnext ({$statusArray['percentTotal']}%)";

        $viewData = array_merge([
            'options' => $options,
            'progressText' => $displayString,
        ], $statusArray);

        return view('home', $viewData);

    }

    public function subscribe(Request $request, NewsletterManager $newsletterManager)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:newsletter,email',
        ]);

        $options = Config::get('onepager.options');
        $onepager_options = [];

        foreach ($options as $option) {
            if ($request->has($option['name'])) {

                if ($option['data']) {
                    array_push($onepager_options, [
                        'name'    => $option['name'],
                        'label'   => $option['label'],
                        'content' => $request->get($option['name'] . '_data'),
                    ]);
                } else {
                    array_push($onepager_options, [
                        'name'  => $option['name'],
                        'label' => $option['label'],
                    ]);
                }
            }
        }

        Newsletter::create([
            'email'            => $request->input('email'),
            'onepager_options' => $onepager_options,
        ]);

        $newsletterManager->addEmailToList($request->input('email'));

        return response()->json(['status' => 'ok', 'message' => 'Email added to newsletter.']);


    }

}
