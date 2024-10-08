<?php

namespace App\Livewire;

use App\Models\BookStatus;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\BookUser;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Collection;

class StatusButton extends Component
{
    public string $status;
    public Collection $statuses;
    public int $book_id;
    public string $statusName;
    public bool $hideShow = false;
    public string $position = '';

    public function mount(): void
    {
        $this->statuses = BookStatus::all()->keyBy('id');
        $this->statusName = $this->status ? $this->statuses[$this->status]->status : 'not added';
        $this->position = $this->position === 'left' ? 'left-0' : 'right-0';
    }

    public function render(): View
    {
        return view('livewire.components.status-button');
    }

    public function updateBookStatusForUser(int $bookId, int $book_status): void
    {

        $res = BookUser::updateOrcreate(
            [
                'user_id' => Auth::user()->id,
                'book_id' => $bookId,
            ],
            [
                'book_status' => $book_status
            ]
        );
        $this->statusName = $this->statuses->firstWhere('id', $res->book_status)->getAttribute('status');
    }
}
