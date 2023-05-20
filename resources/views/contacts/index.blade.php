@extends('layouts.main')

@section('content')
<div class="w-full overflow-x-auto pt-10 pb-10">
    <button class="rounded-md mb-5 bg-orange-600 text-white border border-1 hover:bg-orange-800 hover:text-white p-3" id="showFilters">Filters</button>
    <div id="filterContainer" class="filterContainer hidden flex">
        <div class="px-3 font-20 mb-10 mt-5">
            <label id="Complete" class="rounded-md mb-5 bg-amber-500 text-white border border-1 hover:bg-amber-700 hover:text-white p-2" for="check_complete">Complete</label>
            <input class="mx-1" type="checkbox" id="check_complete" value="Complete">
        </div>
        <div class="px-3 font-20 mb-10 mt-5">
            <label id="New" class="rounded-md mb-5 bg-amber-500 text-white border border-1 hover:bg-amber-700 hover:text-white p-2" for="check_new">New</label>
            <input class="mx-1" type="checkbox" id="check_new" value="New">
        </div>
        <div class="px-3 font-20 mb-10 mt-5">
            <label id="Invalid" class="rounded-md mb-5 bg-amber-500 text-white border border-1 hover:bg-amber-700 hover:text-white p-2" for="check_invalid">Invalid</label>
            <input class="mx-1" type="checkbox" id="check_invalid" value="Invalid">
        </div>
        <div class="px-3 font-20 mb-10 mt-5">
            <label id="archived" class="rounded-md mb-5 bg-amber-500 text-white border border-1 hover:bg-amber-700 hover:text-white p-2" for="check_archived">Archived</label>
            <input class="mx-1" type="checkbox" id="check_archived" value="archived">
        </div>
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
                E-mail
            </th>
            <th scope="col" class="px-6 py-3">
                Phone
            </th>
            <th scope="col" class="px-6 py-3">
                Message
            </th>             
            <th scope="col" class="px-6 py-3">
                Status
            </th>             
            <th scope="col" class="px-6 py-3">
                Archived
            </th>             
            <th scope="col" class="px-6 py-3">
                Actions
            </th>             
           
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact )
        <tr class="row bg-white border-b dark:bg-gray-800 dark:border-gray-700" data-status="{{$contact->status}}" data-archived="{{$contact->archived}}">
            <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
               {{ $contact->name }}
            </th>
            <td class="px-6 py-4 font-normal">
                {{ $contact->surname }}
            </td>
            <td class="px-6 py-4">
                {{ $contact->email }}
            </td>
            <td class="px-6 py-4">
                {{ $contact->phone }}
            </td>
            <td class="px-6 py-4">
                {{ $contact->message }}
            </td>
            <td class="px-6 py-4">
                {{ $contact->status }}
            </td>
            <td class="px-6 py-4">
                {{ $contact->archived }}
            </td>
            <td class="px-6 py-4">
                @if ($contact->archived == null)
                <form action="{{ route('contacts.archive', $contact->id) }}" method="POST" class="inline mt-3">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="archived" name="archive">
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Archive                            
                </button>
                </form>
                @else
                <form action="{{ route('contacts.return', $contact->id) }}" method="POST" class="inline mt-3">
                    @csrf
                    @method('PUT')
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Return                            
                </button>
                </form>
                @endif
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline mt-3">
                    @csrf
                    @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Delete                            
                </button>
                </form>
                <a href="{{ route('contacts.edit', $contact->id) }}"
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
