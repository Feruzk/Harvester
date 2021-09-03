<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach($data as $key => $value)
                    <div class="card text-center mt-4">
                        <h5 class="card-header">{{ $key }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ $value }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>