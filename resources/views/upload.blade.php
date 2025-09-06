<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
</head>
<body>
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul Foto : </label>
        <input type="text" name="Title" required>

        <label>Pilih Foto : </label>
        <input type="file" name="Photo" required>

        <button type="submit">Upload</button>
   
    </form>
</body>
</html>