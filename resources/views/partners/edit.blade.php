@extends('layouts.main')

@section('content')

<div class="mt-8 w-3/4 mx-auto p-5">
<form method="POST" action="{{ route('partners.update', $partner->id) }}">
    @csrf
    @method('PUT')
    <h2 class="mb-4 text-2xl font-bold text-dark">Update partner</h2>
    <div class="mb-6">
      <label for="image" class="block mb-2 font-medium text-gray-900 dark:text-white">Image URL</label>
      <input type="text" id="image" name="image" value="{{$partner->image}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="name" name="name" value="{{$partner->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="link" class="block mb-2 font-medium text-gray-900 dark:text-white">Link</label>
      <input type="text" id="link" name="link" value="{{$partner->link}}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <label for="type" class="font-medium">Type</label>
      <select name="type" id="type" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          @foreach ($types as $type)
          @if ($partner->type == $type->type)
          <option selected hidden value="{{$type->type}}">{{ $type->type }}</option>
          @endif
            <option value="{{$type->type}}">{{ $type->type }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
  </form>
</div>

@endsection