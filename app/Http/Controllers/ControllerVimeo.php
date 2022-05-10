<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Jobs\vimeoRow;
use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;
use Vimeo\Vimeo;



class ControllerVimeo extends Controller
{

    public function create()
    {
        return view('create');
    }

    public function store(Request $request, VimeoManager $vimeo)
    {


        dd($vimeo);
        // $client = new Vimeo("{client_id}", "{client_secret}", "{access_token}");
        // $client = new Vimeo(env('VIMEO_CLIENT'), env('VIMEO_SECRET'), env('VIMEO_ACCESS'));

        // $response = $client->request("/videos/690202507" . '?fields=link');
        // echo "Your video link is: " . $response['body']['link'];

        // dd($response['body']['link']);


        $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/mpeg,video/quicktime|max:60000'
        ]);
        // dd($request);
        vimeoRow::dispatch();


    }
}
