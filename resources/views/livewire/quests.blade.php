<div>
    <?php /** @var $quest \App\Quest */?>
    @foreach ($quests as $quest)
        <div class="w-full bg-gray-100 m-5 border-2 p-2">
            <h2 class="text-2xl">{{ $quest->name }}</h2>
            <p class="text-1xl">{{ $quest->description }}</p>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4"
                wire:click="doQuest({{ $quest->id }})">
                Do It
            </button>
        </div>
    @endforeach
</div>
