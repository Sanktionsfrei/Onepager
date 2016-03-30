<?php


namespace App\Services;


use App\Donation;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\DomCrawler\Crawler;

class DonationService
{

    const FUNDING_GOAL = 150000;

    const WIDGET_URI = 'https://www.startnext.com/sanktionsfrei/widget/?w=200&amp;h=300&amp;l=de';

    public function getDonationStatus()
    {
        $stStatus = $this->getStartnextStatus();

        $localAmount = $this->getLocalAmount();

        return [
            'goal'         => $this->formatCurrency(self::FUNDING_GOAL),
            'amountLocal'  => $this->formatCurrency($localAmount),
            'amountSt'     => $this->formatCurrency($stStatus['amount']),
            'amountTotal'  => $this->formatCurrency($stStatus['amount'] + $localAmount),
            'percentTotal' => (int)$this->calculatePercent(self::FUNDING_GOAL, ($localAmount + $stStatus['amount'])),
            'percentLocal' => (int)$this->calculatePercent(self::FUNDING_GOAL, $localAmount),
            'percentSt'    => (int)$this->calculatePercent(self::FUNDING_GOAL, $stStatus['amount']),
        ];
    }

    protected function formatCurrency($value)
    {
        return number_format($value, 0, ',', '.');
    }

    protected function calculatePercent($base, $value)
    {
        return round($value / $base * 100);
    }

    protected function getLocalAmount()
    {
        $donations = Donation::all();
        return $donations->sum('amount');
    }

    protected function getStartnextStatus()
    {
        $startnext = Cache::remember('startnext', 5, function () {

        $c = curl_init(self::WIDGET_URI);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);


        $html = curl_exec($c);

        if (curl_error($c)) {
            throw new \Exception(curl_error($c));
        }

        $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        curl_close($c);

        if ($status == 200) {

            $crawler = new Crawler;
            $crawler->addHTMLContent($html, 'UTF-8');

            // get the percentage for the progressbar
            $styleString = $crawler->filter('.bar.bar-1')->attr('style');
            $stringArray = explode(':', $styleString);
            $percent = substr($stringArray[1], 0, -2);

            // get the text for the progressbar
            $textArray = $crawler->filter('.status-text span')->extract(['_text']);

            $parts = explode(' ', $textArray[0]);

            return [
                'amount'  => (int)str_replace('.', '', substr($parts[0], 0, -3)),
                'percent' => $percent,
            ];
        }

        });

        return $startnext;
    }
}