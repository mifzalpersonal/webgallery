<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Gallery</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="upload">
    <h1>you heard?</h1>
   @foreach ($photos as $photo)
    <img src="{{ asset('storage/' . $photo->path) }}" width="200">
@endforeach
   </div>

</div>
</body>
</html>