<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Gallery</title>
    @vite(['resources/css/app.css'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #333;
            color: white;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Gallery */
        h1.gallery-title {
            text-align: center;
            color: #333;
            margin: 30px 0 20px 0;
        }

        .upload {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            justify-items: center;
            padding: 0 30px 30px 30px;
            margin-top: 20px;
        }

        .upload img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .upload img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h1>Web Gallery</h1>
        <div class="nav-links">

        </div>
    </div>

    <!-- <h1 class="gallery-title">Wallheaven!</h1> -->
    <div class="upload">
        @foreach ($photos as $photo)
            <img src="{{ asset('storage/' . $photo->path) }}" alt="Photo">
        @endforeach
    </div>

</body>
</html>
