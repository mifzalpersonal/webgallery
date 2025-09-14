<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="upload">
        <div class="nengahin">
            <h1>admin woyyy</h1>
                <div class="nengahin-isi">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                     @csrf
                    <input type="file" name="photo">
                    <button type="submit" class="btn">Upload</button>
                    </form>
                </div>
        </div>
    </div>

    @foreach ($photos as $photo)
    <div>
        <img src="{{ asset('storage/' . $photo->path) }}" width="200">  
        <form action="{{ route('gallery.delete', $photo->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus foto ini?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </div>
@endforeach

</body>
</html>