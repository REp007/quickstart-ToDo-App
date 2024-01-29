@extends('layout.master')


@section('title', 'Edit an Task')



@section('main')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit the task {{ $task->id }}</h1>

        <form action="{{ route('task.update', $task) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-indigo-400">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600">Description:</label>
                <textarea name="description" id="description"
                    class="mt-1 p-2 border rounded-md w-full resize-y min-h-[100px] max-h-[200px] focus:outline-none focus:ring focus:border-indigo-400">{{ $task->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="flex items-center">
                    <input type="checkbox" name="status" id="status"
                        class="mr-2 focus:outline-none focus:ring focus:border-indigo-400" {{ $task->status ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-600">Status</span>
                </label>
            </div>

            <div class="mt-4">
                <input type="submit" value="Edit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-400">
            </div>
        </form>
    </div>
</div>

@endsection
