@extends('layouts.main')

@section('content')
<div class="w-full overflow-x-auto pt-10 pb-10">
<table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Surname
            </th>
            <th scope="col" class="px-6 py-3">
                City
            </th>    
            <th scope="col" class="px-6 py-3">
                Computer
            </th>             
            <th scope="col" class="px-6 py-3">
                Status
            </th>             
            <th scope="col" class="px-6 py-3">
                Has donation
            </th>                          
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application )
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
               {{ $application->name }}
            </th>
            <td class="px-6 py-4 font-normal">
                {{ $application->surname }}
            </td>
            <td class="px-6 py-4 font-normal">
                {{ $application->city }}
            </td>
            <td class="px-6 py-4">
                {{ $application->computer }}
            </td>
            <td class="px-6 py-4">
                {{ $application->status }}
            </td>
            <td class="px-6 py-4">
                {{ $application->has_donation }}
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
