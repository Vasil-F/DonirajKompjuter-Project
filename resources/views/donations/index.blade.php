@extends('layouts.main')

@section('content')
<div class="w-full overflow-x-auto pt-10 pb-10">
    <div class="ml-auto text-left mb-10">
        <a class="rounded-md bg-slate-800 text-white border border-1 hover:bg-slate-600 hover:text-white p-3 "
            href="{{ route('donations.create') }}">Make donation</a>
    </div>
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
                Donation
            </th>             
            <th scope="col" class="px-6 py-3">
                Status
            </th>             
            <th scope="col" class="px-6 py-3">
                Actions
            </th>             
           
        </tr>
    </thead>
    <tbody>
        @foreach ($donations as $donation )
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
               {{ $donation->application->name }}
            </th>
            <td class="px-6 py-4 font-normal">
                {{ $donation->application->surname }}
            </td>
            <td class="px-6 py-4 font-normal">
                {{ $donation->application->city }}
            </td>
            <td class="px-6 py-4">
                {{ $donation->application->computer }}
            </td>
            <td class="px-6 py-4">
                {{ $donation->donation }}
            </td>
            <td class="px-6 py-4">
                {{ $donation->application->status }}
            </td>
            <td class="px-6 py-4">
                <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" class="inline mt-3">
                    @csrf
                    @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Delete                            
                </button>
                </form>
                <a href="{{ route('donations.edit', $donation->id) }}"
                    class="inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    Edit                            
                </a>
            </td>
       
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
