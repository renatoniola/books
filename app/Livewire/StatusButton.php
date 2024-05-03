<?php

namespace App\Livewire;

use App\Models\BookStatus;
use Livewire\Component;
use Auth;
use App\Models\BookUser;

class StatusButton extends Component
{
    public $status;
    public $statuses;
    public $book_id;
    public $statusName;
    public $hideShow = false;

    public function mount() {
        $this->statuses = BookStatus::all()->keyBy('id');
        $this->statusName = $this->status ? $this->statuses[$this->status]->status : 'not added';
    }

    public function render()
    {
        

        return view('livewire.status-button');
    }

    public function hideShowClick()
    {
       
        $this->hideShow = !$this->hideShow;
    }

    public function updateBookStatusForUser($bookId, $book_status)
    {

        $this->hideShowClick();
        
        $res = BookUser::updateOrcreate(
            [
                'user_id' => Auth::user()->id,
                'book_id' => $bookId,
            ],
            [
                'book_status' => $book_status
            ]
        );
        $this->statusName = $this->statuses[$res->book_status]->status;
    }
}
