<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest\PostRequest;
use App\Models\Ticket;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TicketController extends Controller
{
    public function __construct() {
        //
    }

    public function index(): string{
        $tickets = Ticket::query()->with('messages')->get();
        return json_encode($tickets);
    }

    public function show(int $id): string{
        $ticket = Ticket::query()->with('messages')->find($id);
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

    public function update(int $id, PostRequest $request): string{
        $ticket = Ticket::query()->find($id);
        if(!$ticket){
            return new Response(ResponseAlias::HTTP_NOT_FOUND, 'Ticket not found for id '.$id);
        }
        $ticket->title = $request->all()['title'];
        return $ticket->save();
    }

    public function destroy(int $id): string{
        return Ticket::query()->find($id)->delete();
    }

}
