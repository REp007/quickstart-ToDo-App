@extends('layout.master')


@section('title', 'Create an Task')


@section('main')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Add a new Task</h1>

        <form action="{{ route('task.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-indigo-400">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600">Description:</label>
                <textarea name="description" id="description"
                    class="mt-1 p-2 border rounded-md w-full resize-y min-h-[100px] focus:outline-none focus:ring focus:border-indigo-400"
                    cols="20" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <input type="submit" value="Add"
                    class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500 focus:outline-none focus:ring focus:border-green-400">
            </div>
        </form>
    </div>
</div>

@endsection
