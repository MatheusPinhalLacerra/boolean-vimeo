
<!DOCTYPE html>
<html lang="en">
    <h1>Upload com fila</h1>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Video</title>
</head>
<body>


    <form action="{{route('video-upload-fila.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="file" name="video" placeholder="">
        <input type="submit" value="Submit">
    </form>

</body>
</html>


