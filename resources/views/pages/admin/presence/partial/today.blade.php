<?php
use Carbon\Carbon;

?>
<h1 class="text-2xl  text-center text-cyan-400  font-inter mb-3">Presence To Day </h1>
<hr class="w-2/3 h-0.5 bg-cyan-400 mb-8 mx-auto">
<div class="text-md font-Secular text-cyan-400 mb-5">
    Date : {{ $time }}
</div>



<div class="relative overflow-x-auto rounded-md shadow">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-cyan-400 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="p-4">No</th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Presence
                </th>
                <th scope="col" class="px-6 py-3">
                    Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presence_today as $value)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="p-4"> {{ $loop->iteration }}</td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $value->user->employe->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $value->status }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Carbon::parse($value->created_at)->format('H:i A') }}
                    </td>
                    <td class="px-6 py-4 {{ $value->status == 'late' ? 'text-red-600' : 'text-sky-500' }} font-bold">
                        {{ $value->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="p-6 mt-3 bg-white rounded-lg shadow w-60">
    <ul>
        <li>Not Present : {{ count($not_present) }}</li>
        <li>Permission : {{ count($permission) }}</li>
        <li>Present : {{ count($presence) }}</li>
        <li>Late : {{ count($late) }}</li>
    </ul>
</div>
