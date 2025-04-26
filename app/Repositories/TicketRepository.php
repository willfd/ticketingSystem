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
        $query = Ticket::query()->with(['messages','user','assignee']);
        foreach($filters as $key => $value) {
            $query->where($key, $value);
        }
        return $query->get();
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