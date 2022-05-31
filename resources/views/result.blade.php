@extends('layouts.default')
@section('content')
    {{-- TODO: Move "Back to home" and "Add to favorites" btns to the components --}}
    <section>
        <a href="/">
            <button type="button"
                class="mb-2 rounded-lg bg-purple-700 px-5 py-2.5 text-sm font-medium text-white transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Back
                to home</button></a>
        <div class="flex flex-col">
            @foreach ($response as $result)
                <div
                    class="mt-4 flex rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800 md:max-w-fit">
                    <img class="rounded-t-lg" src="{{ $result['Poster'] }}" alt="" />
                    <div class="p-5">
                        <h5
                            class="mb-2 flex justify-between text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $result['Title'] }}
                            @if (Auth::check())
                                <form method="POST" action="/result/favorite">
                                    @csrf
                                    <input type="hidden" name="title" value="{{ $result['Title'] }}">
                                    <button type="submit"
                                        class="mr-2 mb-2 rounded-lg bg-gradient-to-br from-pink-500 to-orange-400 px-5 py-2.5 text-center text-sm font-medium text-white transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-bl focus:outline-none focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-800">Add
                                        to favorites</button>
                                </form>
                            @else
                                <a href="/login"><i class="fa-solid fa-heart"></i></a>
                            @endif
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $result['Year'] }}</p>
                        <p>Curabitur tempor feugiat erat nec imperdiet. Nunc lacinia felis eget odio vehicula congue.
                            Suspendisse volutpat justo a rhoncus gravida. Sed mauris erat, ultrices volutpat viverra
                            consectetur, placerat et tortor. Donec eget porttitor enim. Aliquam eget augue urna. Praesent
                            fermentum ultrices varius. Maecenas fermentum nibh ac quam iaculis mollis. Suspendisse commodo
                            neque sem, sed rhoncus nisi hendrerit non. Phasellus eget nisi sit amet ipsum rhoncus convallis
                            in at odio. Mauris ac mi gravida, tincidunt sem eget, venenatis erat.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@stop
