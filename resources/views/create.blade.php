@extends('main')

@section('title', 'Upload Vídeo')

@section('content')

    <div class="container" style="margin-top: 20px">
        <form action="{{ route('video-upload.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="titulo-video">Título (obrigatório)</label>
            <input id="titulo-video" type="text" name="title" placeholder="title">
            <input type="file" name="video" placeholder="">
            <br>
            <input type="submit" value="Enviar Vídeo">
        </form>
    </div>

@endsection
