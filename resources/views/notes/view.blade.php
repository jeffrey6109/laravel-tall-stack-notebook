<x-guest-layout>
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $note->title }}
        </h2>
    </div>
    <p class="mt-4 mb-12">{{ $note->body }}</p>
    <div class="flex items-center justify-end mt-12 space-x-4">
        <h3 class="mr-2 text-sm">Sent from {{ $user->name }}</h3>
        <livewire:heartreact :note="$note" />
    </div>
    <div class="flex justify-center content-end w-full sm:px-6 sm:w-auto lg:px-8 lg:w-auto">
        <x-button icon="arrow-left" class="mb-3 mt-5 px-28" href="{{ route('notes.index') }}">All Notes</x-button>
    </div>

</x-guest-layout>
