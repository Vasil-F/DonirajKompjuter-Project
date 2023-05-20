@extends('layouts.main')

@section('content')
    <div class="relative overflow-x-auto pt-10 pb-10">
        <div class="ml-auto text-left mb-5">
            <a class="rounded-md bg-slate-800 text-white border border-1 hover:bg-slate-600 hover:text-white p-3 "
                href="{{ route('blogs.create') }}">Add new blog</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 my-10">
            @foreach ($blogs as $blog)
                <div
                    class="max-w-sm h-fit bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-5">
                        <img class="rounded-t-lg" src="{{$blog->image}}" alt="" />
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$blog->title}}</h5>
                        </a>
                        <p class="mb-3 text-overflow:ellipsis font-normal text-gray-700 dark:text-gray-400">{{$blog->text}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Category :</b> {{$blog->category}}</p>
                        <p class="mb-3 mt-3 font-normal text-gray-700 dark:text-gray-400"><b>Created at :</b> {{$blog->created_at->toDateString()}}</p>
                        @if (!$blog->updated_at == null)
                        <p class="mb-3 mt-3 font-normal text-gray-700 dark:text-gray-400"><b>Updated at :</b> {{$blog->updated_at->toDateString()}}</p>
                        @endif
                        <a href="{{ route('blogs.edit', $blog->id) }}"
                            class="inline-flex items-center px-3 py-2 mr-2 mt-3 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Edit                            
                        </a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline mt-3">
                            @csrf
                            @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Delete                            
                        </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
