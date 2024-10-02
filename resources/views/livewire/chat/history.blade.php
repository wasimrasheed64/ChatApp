<?php

use App\Models\ChatMessage;
use App\Models\ChatUser;
use Livewire\Attributes\Reactive;
use Livewire\Volt\Component;
use Livewire\Attributes\On;


new class extends Component {
}
?>

<div>
    <div class="chat-history-wrapper">
        <livewire:chat.historyheader></livewire:chat.historyheader>
        <livewire:chat.historybody></livewire:chat.historybody>
        <livewire:chat.sendmessage  ></livewire:chat.sendmessage>
    </div>
</div>
