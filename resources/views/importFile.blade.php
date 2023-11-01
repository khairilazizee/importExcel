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
                    <input type="file" name="file" class="custom-file-input" id="customFile" required>
                </div>
            </div>
            <button class="bg-red-500 text-white py-3 px-4 rounded-sm">Import Users</button>
        </form>
    </div>

    <div class="flex mx-auto justify-center py-20 max-w-6xl">
        <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th>Financial Indicator</th>
                    <th>Division</th>
                    <th>Department</th>
                    <th>Actual Month</th>
                    <th>Date Uploaded</th>
                    <th>MTD</th>
                    <th>Budget MTD</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach($budgets as $budget)
                <tr>
                    <td>{{ $budget->financial_indicator }}</td>
                    <td>{{ $budget->division }}</td>
                    <td>{{ $budget->department }}</td>
                    <td>{{ $budget->actual_month }}</td>
                    <td>{{ $budget->date_uploaded }}</td>
                    <td>{{ $budget->mtd }}</td>
                    <td>{{ $budget->budget_mtd }}</td>
                    <td>{{ $budget->balance }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
