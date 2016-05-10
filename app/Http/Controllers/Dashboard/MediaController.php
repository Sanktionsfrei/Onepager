<?php


namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\MediaItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class MediaController
 * @package App\Http\Controllers\Dashboard
 */
class MediaController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $items = MediaItem::all();

        return view('dashboard.media.index', ['items' => $items]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1|max:60|alpha_dash',
            'file' => 'required|image'
        ]);


        // store the image
        Storage::put(
            '/media/images/'. str_slug($request->get('name')) . '.' . $request->file('file')->getClientOriginalExtension(),
            file_get_contents($request->file('file')->getRealPath())
        );

        // store a reference in the db
        $media = new MediaItem;
        $media->name = $request->get('name');
        $media->size = $request->file('file')->getClientSize();
        $media->path = str_slug($request->get('name')) . '.' . $request->file('file')->getClientOriginalExtension();
        $media->save();

        return redirect()->route('dashboard.media.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('dashboard.media.create');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        MediaItem::destroy([$id]);
        return redirect()->back();
    }

}