<?php

namespace App\Http\Controllers;
//video-facul: 66584f47cd5931bffa7dae7db2e9578f
use App\Http\Controllers\Controller;
use App\Jobs\vimeoRow;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;



class ControllerFila extends Controller
{

    public function create()
    {
        return view('createFila');
    }

    public function store(Request $request, VimeoManager $vimeo)
{

    //$request->all();

        //vimeoRow::dispatch($request->all());

        vimeoRow::dispatch($request->all())->onQueue('vimeoRow');

    dd("fui e voltei");

        // $client = new Vimeo("{client_id}", "{client_secret}", "{access_token}");
        // $client = new Vimeo(env('VIMEO_CLIENT'), env('VIMEO_SECRET'), env('VIMEO_ACCESS'));

        // $response = $client->request("/videos/690202507" . '?fields=link');
        // echo "Your video link is: " . $response['body']['link'];

        // dd($response['body']['link']);




        // $uri = $vimeo->upload($request->video, [
        //     'name' => $request->title
        // ]);
        // dd($uri);

        // do {
        //     $response = $client->request($uri . '?fields=transcode.status');
        //     if ($response['body']['transcode']['status'] === 'complete') {
        //         print 'Your video finished transcoding.';
        //     } elseif ($response['body']['transcode']['status'] === 'in_progress') {
        //         print 'Your video is still transcoding.';
        //     } else {
        //         print 'Your video encountered an error during transcoding.';
        //     }
        // } while ($response['body']['transcode']['status'] !== 'complete');

    }
}
