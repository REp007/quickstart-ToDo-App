@extends('layout.master')


@section('title', 'Tasks')



@section('main')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">List of Tasks:</h1>

        <div class="status">
            @if (session('status'))
                <h4 class="text-green-600">{{ session('status') }}</h4>
            @endif
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Want to add a new task:</h3>
            <a href="{{ route('task.create') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-400">
                Add a new Task
            </a>
        </div>

        <div class="mt-8">
            <table class="w-full border-2 border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-3">N</th>
                        <th class="border p-3">Title of Task</th>
                        <th class="border p-3">Description</th>
                        <th class="border p-3">Status</th>
                        <th class="border p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="border p-3">{{ $task->id }}</td>
                            <td class="border p-3">{{ $task->title }}</td>
                            <td class="border p-3">{{ $task->description }}</td>
                            <td class="border p-3">{{ $task->status ? 'Done' : 'Not Done Yet' }}</td>
                            <td class="border p-3">
                                <div class="flex items-center">
                                    <a href="{{ route('task.edit', $task) }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2 hover:bg-blue-400 focus:outline-none focus:ring focus:border-blue-400">Edit</a>
                                    <form action="{{ route('task.destroy', $task) }}" method="post" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-400 focus:outline-none focus:ring focus:border-red-400"
                                            onclick="return confirm('Are you sure')">Delete</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
