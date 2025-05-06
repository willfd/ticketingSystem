<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest\PatchRequest;
use App\Http\Requests\TicketRequest\PostRequest;
use App\Models\Status;
use App\Models\Ticket;
use App\Services\TicketService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


class StatusController extends Controller
{
    public function __construct() {
        //
    }

    public function index(Request $request): string
    {
        return json_encode(Status::query()->get());
    }

    public function availableStatuses(Request $request): string
    {
        return json_encode(['new', 'processing', 'pending', 'awaiting', 'resolved', 'expired']);
    }

}
