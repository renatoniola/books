<?php

namespace App\Livewire;

use App\Models\BookStatus;
use Livewire\Component;
use Auth;
use App\Models\BookUser;
use Illuminate\View\View;

class StatusButton extends Component
{
    public string $status;
    public $statuses;
    public int $book_id;
    public string $statusName;
    public bool $hideShow = false;

    protected $listeners = ['postAdded' => 'closeOtherDropdowns'];

    public function closeOtherDropdowns($id): void
    {
        if ($this->__id === $id) {
            $this->hideShow = !$this->hideShow;
        } else {
            $this->hideShow = false;
        }
    }

    public function mount(): void
    {
        $this->statuses = BookStatus::all()->keyBy('id');
        $this->statusName = $this->status ? $this->statuses[$this->status]->status : 'not added';
    }

    public function render(): View
    {
        return view('livewire.status-button');
    }

    public function hideShowClick(): void
    {
        $this->dispatch('postAdded', $this->__id)->to(StatusButton::class);
    }

    public function updateBookStatusForUser($bookId, $book_status): void
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
