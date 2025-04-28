<?php

namespace App\Models;

use Database\Factories\AssigneeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Assignee extends Model
{
    /** @use HasFactory<AssigneeFactory> */
    use HasFactory;

    protected $table = 'ticket_assignees';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ticket_id',
        'user_id'
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
            'user_id' => 'integer',
            'active' => 'boolean'
        ];
    }

    public function ticket(): belongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function assignee(): belongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
