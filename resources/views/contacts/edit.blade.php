@extends('layouts.main')

@section('content')

<div class="mt-8 w-1/2 mx-auto p-5">
    <h2 class="mb-4 text-2xl font-bold text-dark">Update contact</h2>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
      @csrf
      @method('PUT')
    <div class="mb-6">
      <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="name" name="name" value="{{ $contact->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="surname" class="block mb-2 font-medium text-gray-900 dark:text-white">Surname</label>
      <input type="text" id="surname" name="surname" value="{{ $contact->surname }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 font-medium text-gray-900 dark:text-white">Email</label>
      <input type="text" id="email" name="email" value="{{ $contact->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="phone" class="block mb-2 font-medium text-gray-900 dark:text-white">Phone</label>
      <input type="number" id="phone" name="phone" value="{{ $contact->phone }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="message" class="block mb-2 font-medium text-gray-900 dark:text-white">Message</label>
      <input type="text" id="message" name="message" value="{{ $contact->message }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <label for="status" class="font-medium">Status</label>
      <select name="status" id="status" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($statuses as $status)
        @if ($contact->status == $status->status)
        <option selected hidden value="{{$status->status}}">{{ $status->status }}</option>
        @endif
            <option value="{{$status->status}}">{{ $status->status }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
  </form>
</div>

@endsection