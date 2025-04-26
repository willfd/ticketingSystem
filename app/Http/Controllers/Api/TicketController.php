<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest\PatchRequest;
use App\Http\Requests\TicketRequest\PostRequest;
use App\Models\Ticket;
use App\Services\TicketService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


// @Todo make status own table to allow status history
// @Todo decouple Assignee for same reason as status to allow history and keep track who works on ticket

class TicketController extends Controller
{
    public function __construct(protected TicketService $ticketService) {
        //
    }

    public function index(Request $request): string
    {
        $tickets = $this->ticketService->getTickets($request->query());
        return json_encode($tickets);
    }

    public function countIndex(Request $request): int
    {
        return $this->ticketService->getTicketCount($request->query());
    }

    public function show(int $id): string{
        $ticket = Ticket::query()->with(['messages','user','assignee'])->find($id);
        return json_encode($ticket);
    }

    public function create(PostRequest $request): string{
        $ticket = new Ticket(
            [
                'ticket_id' => $request->get('ticket_id'),
                'title'=>$request->all()['title'],
                'message'=>$request->all()['message'],
            ]
        );
        return $ticket->save();
    }

    public function update(int $id, PatchRequest $request): string{
        $ticket = Ticket::query()->find($id);
        if(!$ticket){
            return new Response(ResponseAlias::HTTP_NOT_FOUND, 'Ticket not found for id '.$id);
        }
        $ticket->assignee_id = $request->all()['assignee_id'];
        return $ticket->save();
    }

    public function destroy(int $id): string{
        return Ticket::query()->find($id)->delete();
    }

}
