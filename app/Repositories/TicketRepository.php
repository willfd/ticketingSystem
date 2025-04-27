<?php

namespace App\Repositories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Collection;

class TicketRepository
{
    public function __construction(){
        //
    }

    public function getAll(array $filters): Collection
    {
        $query = Ticket::query()->with(['messages','user','assignee','statuses']);
        foreach($filters as $key => $value) {
            switch ($key) {
                case 'currentStatus':
                    $query->whereHas('currentStatus', function($status) use($value){
                        $status->where('status', $value);
                    });
                    break;

                default:
                    $query->where($key, $value);
                    break;
            }
        }
        return $query->get();
    }

    public function getFilteredCount(array $filters): int
    {
        $tickets = $this->getAll($filters);
        return $tickets->count();
    }

    public function getById($id){
        //
    }

    public function create($data){
        //
    }

    public function update($id,$data){
        //
    }
}