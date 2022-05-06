<div class="flex items-center space-x-4 p-1">
    <x-filament::button :color="$vote ? 'primary' : 'secondary'" wire:click="toggleUpvote">
        @if($vote)
            <x-heroicon-o-thumb-up class="w-5 h-5"/>
        @else
            <x-heroicon-o-thumb-up class="w-5 h-5"/>
        @endif
    </x-filament::button>

    <span>{{ $item->total_votes }} total {{ trans_choice('messages.votes', $item->total_votes) }}</span>

    @if($this->vote)
        @if($this->vote->subscribed)
            <button class="border-b border-dotted font-semibold border-gray-500" wire:click="unsubscribe">
                unsubscribe
            </button>
        @else
            <button class="border-b border-dotted font-semibold border-gray-500" wire:click="subscribe">
                subscribe
            </button>
        @endif
    @endif

</div>