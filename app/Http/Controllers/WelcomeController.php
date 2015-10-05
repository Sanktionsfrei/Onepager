<?php


namespace App\Http\Controllers;


use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class WelcomeController extends Controller
{

    public function show()
    {
        $options = Config::get('onepager.options');

        return view('welcome', ['options' => $options]);

    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:newsletter,email'
        ]);

        $options = Config::get('onepager.options');
        $onepager_options = [];

        foreach($options as $option){
            if($request->has($option['name'])){
                array_push($onepager_options, ['name' => $option['name'],'label' => $option['label']]);
            }
        }

        Newsletter::create([
            'email' => $request->input('email'),
            'onepager_options' => $onepager_options
        ]);

        return response()->json(['status' => 'ok', 'message' => 'Email added to newsletter.']);


    }

}