<?php


namespace App\Http\Controllers\Dashboard;


use App\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::paginate(10);

        $total = $donations->sum('amount');

        return view('dashboard.donation.index', ['donations' => $donations, 'total' => $total]);
    }

    public function create()
    {
        return view('dashboard.donation.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required|integer'
        ]);

        Donation::create($request->only(['name', 'amount']));

        return redirect()->route('dashboard.donation.index');

    }

    public function edit($donationId)
    {
        $donation = Donation::find($donationId);

        return view('dashboard.donation.edit', ['donation' => $donation]);
    }

    public function update(Request $request, $donationId)
    {
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required|integer'
        ]);

        $donation = Donation::find($donationId);
        $donation->update($request->only(['name', 'amount']));

        return redirect()->back();
        
    }

    public function destroy($donation)
    {
        Donation::destroy($donation);

        return redirect()->route('dashboard.donation.index');
    }
    
}