<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Add News</title>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column p-4">
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Add Images</h2>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-save"></i> Save
                        </button>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <hr>

                @csrf
                <h5>Gambar</h5>
                <input type="file" name="image" id="image" class="mb-3">
            </form>
        </div>
    </div>
</body>

</html>
