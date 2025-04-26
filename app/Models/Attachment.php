<?php

namespace App\Models;

use Database\Factories\AttachmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    /** @use HasFactory<AttachmentFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'message_id',
        'url',
        'type'
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
            'url' => 'string',
            'type' => 'string'
        ];
    }

    public function message(): belongsTo
    {
        return $this->belongsTo(Message::class, 'message_id', 'id');
    }
}
