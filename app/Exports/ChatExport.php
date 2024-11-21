<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ChatExport implements FromView, ShouldAutoSize
{
    public $chatObject;

    public function __construct($chatObject)
    {
        $this->chatObject = $chatObject;
    }

    public function view(): View
    {
        return view('Export.chatExport', [
            'chatObject' => $this->chatObject,
        ]);
    }
}
