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
                    <label for="photo" class="btn">Pilih Foto</label>
                    <input type="file" name="photo">
                    <button type="submit" class="btn">Upload</button>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>