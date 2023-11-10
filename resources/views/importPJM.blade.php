@extends('welcome')

@section('content')

    <body>
        @include('navigation')
        <div class="mx-auto flex justify-center bg-gray-100 max-w-6xl p-10">
            <form action="{{ route('importpjm') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile" required>
                    </div>
                </div>
                <button class="bg-red-500 text-white py-2 px-4 rounded-sm">Import File</button>
            </form>
        </div>

        <div class="flex mx-auto justify-center py-20 max-w-[90%] ">
            <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-4">Company</th>
                        <th class="px-6 py-4">Project</th>
                        <th class="px-6 py-4">Business Partner</th>
                        <th class="px-6 py-4">Business Partner name</th>
                        <th class="px-6 py-4">Estimated Revenue at completion</th>
                        <th class="px-6 py-4">Budget Amount</th>
                        <th class="px-6 py-4">Estimate Profit</th>
                        <th class="px-6 py-4">Line amount - tax (PO)</th>
                        <th class="px-6 py-4">Line amount - tax (PIN)</th>
                        <th class="px-6 py-4">Balance to Utilize</th>
                        <th class="px-6 py-4">Balance Actual</th>
                        <th class="px-6 py-4">% Balance to Utilize</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pjms as $budget)
                        <tr>
                            <td>{{ $budget->company }}</td>
                            <td>{{ $budget->project }}</td>
                            <td>{{ $budget->business_partner }}</td>
                            <td>{{ $budget->business_partner_name }}</td>
                            <td>{{ $budget->estimated_revenue }}</td>
                            <td>{{ $budget->budget_amount }}</td>
                            <td>{{ $budget->estimate_profit }}</td>
                            <td>{{ $budget->line_amount_po }}</td>
                            <td>{{ $budget->line_amount_pin }}</td>
                            <td>{{ $budget->balance_to_utilize }}</td>
                            <td>{{ $budget->balace_actual }}</td>
                            <td>{{ $budget->balace_utilize }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endsection
