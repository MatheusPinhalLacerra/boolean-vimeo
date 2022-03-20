<?php

namespace App\Http\Controllers;
//video-facul: 66584f47cd5931bffa7dae7db2e9578f
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;
use Vimeo\Vimeo;


class ControllerVimeo extends Controller{

    public function create(){
        return view('create');
    }

    public function store(Request $request, VimeoManager $vimeo){

        $request->validate([
            'video'=>'required|mimetypes:video/mp4,video/mpeg,video/quicktime|max:60000'
        ]);


        $uri = $vimeo->upload($request->video, [
            'name'=> $request->title
        ]);


        dd($uri);


    }
}
