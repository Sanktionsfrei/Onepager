<?php


namespace App\Http\Controllers;


use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Services\NewsletterManager;
use Symfony\Component\DomCrawler\Crawler;

class WelcomeController extends Controller
{

    public function show()
    {
        $options = Config::get('onepager.options');


        $c = curl_init('https://www.startnext.com/sanktionsfrei/widget/?w=200&amp;h=300&amp;l=de');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);


        $html = curl_exec($c);

        if (curl_error($c))
            die(curl_error($c));

        $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        curl_close($c);

        $percent = 0;

        if($status == 200){
            $crawler = new Crawler;
            $crawler->addHTMLContent($html, 'UTF-8');

            // get the percentage for the progressbar
            $styleString = $crawler->filter('.bar.bar-1')->attr('style');
            $stringArray = explode(':', $styleString);
            $percent = substr($stringArray[1], 0,-2);
            // get the text for the progressbar
            $textArray = $crawler->filter('.status-text span')->extract(['_text']);

        }

        return view('home', ['options' => $options, 'percent' => $percent,'progressText' => $textArray[0]]);

    }

    public function subscribe(Request $request, NewsletterManager $newsletterManager)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:newsletter,email'
        ]);

        $options = Config::get('onepager.options');
        $onepager_options = [];

        foreach($options as $option){
            if($request->has($option['name'])){

                if($option['data']){
                    array_push($onepager_options, [
                        'name' => $option['name'],
                        'label' => $option['label'],
                        'content' => $request->get($option['name'] . '_data')
                    ]);
                }else{
                    array_push($onepager_options, [
                        'name' => $option['name'],
                        'label' => $option['label']
                    ]);
                }
            }
        }

        Newsletter::create([
            'email' => $request->input('email'),
            'onepager_options' => $onepager_options
        ]);

        $newsletterManager->addEmailToList($request->input('email'));

        return response()->json(['status' => 'ok', 'message' => 'Email added to newsletter.']);


    }

}