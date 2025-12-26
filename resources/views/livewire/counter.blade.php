<div class="flex flex-wrap items-center justify-center gap-4 mb-4">
    <x-button outline light Cyan label="-" wire:click="decrement" />
    <h1 class="text-3xl font-bold">{{ $count }}</h1>
    <x-button outline light Cyan label="+" wire:click="increment" />
</div>
