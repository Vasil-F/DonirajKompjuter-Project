@extends('layouts.main')

@section('content')

<div class="mt-8 w-1/2 mx-auto p-5">
    <h2 class="mb-4 text-2xl font-bold text-dark">Update volunteer</h2>
    <form method="POST" action="{{ route('volunteers.update', $volunteer->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
    <div class="mb-6">
      <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="name" name="name" value="{{ $volunteer->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="city" class="block mb-2 font-medium text-gray-900 dark:text-white">City</label>
      <input type="text" id="city" name="city" value="{{ $volunteer->city }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 font-medium text-gray-900 dark:text-white">Email</label>
      <input type="text" id="email" name="email" value="{{ $volunteer->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="phone" class="block mb-2 font-medium text-gray-900 dark:text-white">Phone</label>
      <input type="number" id="phone" name="phone" value="{{ $volunteer->phone }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="position" class="font-medium">Position</label>
    <select name="position" id="position" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      @foreach ($positions as $position)
      @if ($volunteer->position == $position->name)
      <option selected hidden value="{{$position->name}}">{{ $position->name }}</option>
      @endif
          <option value="{{$position->name}}">{{ $position->name }}</option>
      @endforeach
    </select>
  </div>
    <div class="mb-6">
      <label for="details" class="block mb-2 font-medium text-gray-900 dark:text-white">Details</label>
      <input type="text" id="details" name="details" value="{{ $volunteer->details }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="file">Upload file</label>
      <input class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file">
    </div>
    <div class="mb-6">
        <label for="status" class="font-medium">Status</label>
      <select name="status" id="status" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($statuses as $status)
        @if ($volunteer->status == $status->status)
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