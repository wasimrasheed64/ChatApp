<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="chat-history-footer shadow-xs">
        <form class="form-send-message d-flex justify-content-between align-items-center">
            <input
                class="form-control message-input border-0 me-4 shadow-none"
                placeholder="Type your message here..." />
            <div class="message-actions d-flex align-items-center">
                <i
                    class="speech-to-text ti ti-microphone ti-md btn btn-sm btn-text-secondary btn-icon rounded-pill cursor-pointer text-heading"></i>
                <label for="attach-doc" class="form-label mb-0">
                    <i
                        class="ti ti-paperclip ti-md cursor-pointer btn btn-sm btn-text-secondary btn-icon rounded-pill mx-1 text-heading"></i>
                    <input type="file" id="attach-doc" hidden />
                </label>
                <button class="btn btn-primary d-flex send-msg-btn">
                    <span class="align-middle d-md-inline-block d-none">Send</span>
                    <i class="ti ti-send ti-16px ms-md-2 ms-0"></i>
                </button>
            </div>
        </form>
    </div>
</div>
