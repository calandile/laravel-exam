@extends('layouts.default')
@section('content')
    <section>
        <a href="/">Back</a>
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
                                        class="ml-2 rounded-lg border border-blue-700 bg-blue-700 p-2.5 text-sm font-medium text-white transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-br focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                            class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg></button>
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
