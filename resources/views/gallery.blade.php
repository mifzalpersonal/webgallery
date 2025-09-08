<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Gallery</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <h1>Galeri Sekolah</h1>
    <div class="gallery">
        @foreach($photos as $photo)
    <img src="{{ asset($photo->path) }}" alt="">
    <p>{{ $photo->title }}</p>
        @endforeach

        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Judul Foto:</label>
    <input type="text" name="title" required>
    
    <label>Pilih Foto:</label>
    <input type="file" name="photo" required>
    
    <button type="submit">Upload</button>
</form>

</div>
</body>
</html>