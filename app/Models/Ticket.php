<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    /** @use HasFactory<TicketFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'status',
        'assignee_id'
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'status' => 'string',
            'assignee_id' => 'integer'
        ];
    }

    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function assignee(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'assignee_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'ticket_id', 'id');
    }
}
