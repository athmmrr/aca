<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome 6.3.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Edit Image - Gallery</title>

    <style>
        /* Styling sidebar (previous CSS) */
        #sidebar {
            height: 100vh;
            position: sticky;
            top: 0;
        }
        .sidebar-profile {
            text-align: center;
            padding: 20px;
        }
        .sidebar-profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .sidebar-heading {
            font-size: 32px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .sidebar-profile h4 {
            font-size: 18px;
        }

        /* Form Edit Image */
        .form-container {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 30px;
            max-width: 600px;
            margin: 40px auto;
        }
        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
        }
        .form-container img {
            display: block;
            margin: 20px auto;
            max-width: 200px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .form-container input[type="file"] {
            display: block;
            margin: 10px auto;
        }
        .form-container .alert {
            margin-bottom: 20px;
        }

        /* Additional styling for responsiveness */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
            .form-container h2 {
                font-size: 20px;
            }
            .form-container .btn-primary {
                width: 100%;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    

<div class="form-container">
    <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-between">
            <div>
                <h2>Edit Image (ID: {{ $gallery->id }})</h2>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i> Update
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

        <h5>Current Image</h5>
        <img src="{{ asset('gallery-images/' . $gallery->image) }}" alt="Current Image" width="200">

        <h5 class="mt-3">Change Image</h5>
        <input type="file" name="image" id="image" class="mb-3">
    </form>
</div>


</body>
