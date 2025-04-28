<?php

namespace App\Services;

use App\Models\Ticket;
use App\Repositories\TicketRepository;
use Illuminate\Database\Eloquent\Collection;

class TicketService
{
    public function __construct(protected TicketRepository $repository) {
        //
    }

    public function getTickets(array $params): Collection
    {
        $filters = collect($params);
        return $this->repository->getAll($filters->all());
    }

    public function getTicketCount(array $params): int
    {
        $filters = collect($params);
        return $this->repository->getFilteredCount($filters->all());
    }

    public function getById(int $id): ?Ticket
    {
        return $this->repository->getById($id);
    }
}