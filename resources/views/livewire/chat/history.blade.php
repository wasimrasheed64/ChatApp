<?php

use App\Models\ChatMessage;
use App\Models\ChatUser;
use Livewire\Attributes\Reactive;
use Livewire\Volt\Component;
use Livewire\Attributes\On;


new class extends Component {
    public $chatId;

    #[On('get-chat-user')]
    public function chatListUpdated($chatId): void
    {
        \Illuminate\Support\Facades\Log::info('========Chat User=======');
        \Illuminate\Support\Facades\Log::info($chatId);
        \Illuminate\Support\Facades\Log::info('===============');
        $this->chatId = $chatId;
    }
}
?>

<div>
    <div class="chat-history-wrapper">
        <livewire:chat.historyheader></livewire:chat.historyheader>
        @if($chatId)
            <livewire:chat.historybody :chatSelected="$chatId" ></livewire:chat.historybody>
        @endif
    </div>
</div>
