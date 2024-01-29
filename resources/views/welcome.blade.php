@extends('layout.master')

@section('title', 'route page')


@section('main')
<main class="grid min-h-screen place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6 text-indigo-600">
            Quick-start Todo App
        </h1>
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <a href="{{ route('task.index') }}"
                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go ToDo Page</a>
        </div>
        <p class="text-lg font-semibold mt-8">
            By My Amrani
            <span class="block text-gray-600">You can find me Post memes on <a href="https://twitter.com/Amr4nii" target="_blank" class="text-indigo-600">Twitter</a></span>
        </p>
    </div>
</main>

@endsection
