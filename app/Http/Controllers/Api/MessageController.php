<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest\PostRequest;
use App\Models\Message;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class MessageController extends Controller
{
    public function __construct() {
        //
    }

    public function index(): string{
        $Messages = Message::query()->with(['attachments','ticket'])->get();
        return json_encode($Messages);
    }

    public function show(int $id): string{
        $Message = Message::query()->with(['attachments','ticket'])->find($id);
        return json_encode($Message);
    }

    public function create($request): string{
        $Message = new Message(
            [
                'Message_id' => $request->get('Message_id'),
                'title'=>$request->all()['title'],
                'message'=>$request->all()['message'],
            ]
        );
        return $Message->save();
    }

    public function update(int $id, $request): string{
        $Message = Message::query()->find($id);
        if(!$Message){
            return new Response(ResponseAlias::HTTP_NOT_FOUND, 'Message not found for id '.$id);
        }
        $Message->title = $request->all()['title'];
        return $Message->save();
    }

    public function destroy(int $id): string{
        return Message::query()->find($id)->delete();
    }

}
