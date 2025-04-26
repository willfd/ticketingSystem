<?php

namespace App\Models;

use Database\Factories\MessageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Message extends Model
{
    /** @use HasFactory<MessageFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ticket_id',
        'title',
        'message'
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'title' => 'string',
            'message' => 'string'
        ];
    }

    public function ticket(): belongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class, 'message_id', 'id');
    }
}
