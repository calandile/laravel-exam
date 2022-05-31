@extends('layouts.default')
@section('content')
    @foreach ($favorites as $favorite)
        <div class="flex flex-col">
            <div
                class="mt-4 flex rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800 md:max-w-fit">
                <div class="p-5">
                    <h5 class="mb-2 flex justify-between text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $favorite->title }}
                    </h5>
                </div>
            </div>
        </div>
    @endforeach
@stop
