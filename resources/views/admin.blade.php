<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
    @vite(['resources/css/app.css'])
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .upload {
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        .upload h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .nengahin-isi {
            text-align: center;
        }

        input[type="file"] {
            display: none; /* hide the default input */
        }

        .btn {
            background-color: #3490dc;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #2779bd;
        }

        .photos {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }

        .photo-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .photo-card:hover {
            transform: scale(1.05);
        }

        .photo-card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .photo-card form {
            position: absolute;
            top: 8px;
            right: 8px;
        }

        .photo-card button {
            background-color: rgba(255, 0, 0, 0.8);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            transition: background-color 0.3s;
        }

        .photo-card button:hover {
            background-color: red;
        }

        @media (max-width: 500px) {
            .photo-card img {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>

    <div class="upload">
        <h1>Admin Panel</h1>
        <div class="nengahin-isi">
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="photo" class="btn">Pilih Foto</label>
                <input type="file" name="photo" id="photo">
                <button type="submit" class="btn">Upload</button>
            </form>
        </div>
    </div>

    <div class="photos">
        @foreach ($photos as $photo)
            <div class="photo-card">
                <img src="{{ asset('storage/' . $photo->path) }}" alt="Foto">
                <form action="{{ route('gallery.delete', $photo->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus foto ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </div>
        @endforeach
    </div>

</body>
</html>
