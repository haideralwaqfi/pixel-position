@props(['job'])
<x-panel class="flex gap-x-6">

    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">

        <a class="self-start text-sm text-gray-400" href="#">{{ $job->employer->name }}</a>

        <h3 class="group-hover:text-blue-800 text-xl font-bold transition duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>

    </div>
    <div>
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size=small />
            @endforeach
        </div>
    </div>

</x-panel>
