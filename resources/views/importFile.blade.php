<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex gap-10 mx-auto justify-center py-10">
        <div>Home</div>
        <div>Import</div>
        <div>Export</div>
    </div>
    <div class="mx-auto flex justify-center">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="bg-red-500 text-white py-3 px-4 rounded-sm">Import Users</button>
        </form>
    </div>
</body>

</html>
