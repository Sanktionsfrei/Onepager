<?php


namespace App\Http\Controllers\Cdn;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageController
{
    protected $filter = [
        'split', 'header'
    ];

    public function show(Request $request, $project, $file)
    {
        $request->has('filter') ? $filter = $request->get('filter'): $filter = 'header';

        if(!in_array($filter, $this->filter))
        {
            return response('Filter not supported', 404);
        }

        $contents = Storage::get("/projects/{$project}/media/{$file}");


        $img = Image::make($contents)->orientate();

        switch ($filter){
            case 'split':
                $img = $this->filterSplit($img);
                break;
            case 'header':
                $img = $this->filterHeader($img);
                break;
            default:
                $img = $this->filterSplit($img);
                break;
        }


        // create response and add encoded image data
        $response = Response::make($img->encode('png'));

        // set content-type
        $response->header('Content-Type', 'image/png');

        // output
        return $response;

    }

    protected function filterHeader($img)
    {
        return $img->resize(550, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }


    protected function filterSplit($img)
    {
        return $img->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }

}