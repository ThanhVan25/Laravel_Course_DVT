<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Car</title>
    <style>
        /* Custom styles go here, if needed */
        .form-edit {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 180px;
        }

        .custom-form {
            max-width: 900px;
        }

        .form-control {
            min-width: 600px;
        }

        .error-label {
            color: red;
        }

        #image-preview {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 align-content-center mt-5">
            <h1 class="text-center text-danger" id="animation">Chỉnh sửa thông tin xe</h1>
        </div>
        <div class="col-md-8 form-edit">
            <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="post" enctype="multipart/form-data" class="custom-form">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="description" class="@error('description') error-label @enderror">Description:</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter description">{{ old('description', $car->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="model" class="@error('model') error-label @enderror">Model:</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model', $car->model) }}" placeholder="Enter model">
                    @error('model')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="produced_on" class="@error('produced_on') error-label @enderror">Produced On:</label>
                    <input type="date" class="form-control @error('produced_on') is-invalid @enderror" id="produced_on" name="produced_on" value="{{ old('produced_on', $car->produced_on) }}" placeholder="Enter produced on">
                    @error('produced_on')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="@error('image') error-label @enderror">Image:</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage(this)">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <img id="image-preview" src="{{ asset('images/'.$car->image) }}" alt="Image Preview" style="max-width: 200px;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            var filename = document.getElementById('image-filename');
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    filename.textContent = file.name; // Set the filename
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
                filename.textContent = ''; // Clear the filename
            }
        }
    </script>
</body>

</html>