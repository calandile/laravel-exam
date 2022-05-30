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
