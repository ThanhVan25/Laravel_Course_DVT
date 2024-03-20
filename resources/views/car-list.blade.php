<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Liên kết CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tùy chỉnh CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
            border-color: #343a40;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
            cursor: pointer;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .table tbody td:first-child {
            font-weight: bold;
        }

        .table tbody td:last-child {
            font-style: italic;
        }

        .table tbody td:nth-child(3) {
            text-transform: uppercase;
        }

        .custom-title {
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: bold;
        }

        .custom-image {
            width: 200px;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            object-fit: cover;
        }

        .add-button {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="custom-title">Danh sách xe</h2>
        <a name="" id="" class="btn btn-primary add-button float-right" href="{{ action([App\Http\Controllers\CarController::class, 'create']) }}" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Model</th>
                        <th>Produced_on</th>
                        <th>Image</th>
                        <th>Mf_ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                    <tr>
                        <td><a name="" id="" class="btn btn-primary" href="{{ action([App\Http\Controllers\CarController::class, 'show'], ['car'=> $car->id])}}" role="button">{{ $car->id }}</a></td>
                        <td>{{ $car->description }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->produced_on }}</td>
                        <td><img src="{{'/images/'.$car->image}}" class="custom-image"></td>
                        <td>{{ $car->mf_id }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ action([App\Http\Controllers\CarController::class, 'show'], ['car'=> $car->id])}}" role="button">Chi tiết</a>
                            <a class="btn btn-primary" href="{{ action([App\Http\Controllers\CarController::class, 'edit'], ['car' => $car->id])}}" role="button">Chỉnh sửa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Liên kết JavaScript của Bootstrap (tùy chọn) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>