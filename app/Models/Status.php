<?php

namespace App\Models;

use Database\Factories\StatusFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Status extends Model
{
    /** @use HasFactory<StatusFactory> */
    use HasFactory;

    protected $table = 'ticket_status';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ticket_id',
        'status'
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
            'status' => 'string'
        ];
    }

    public function ticket(): hasOne
    {
        return $this->hasOne(Ticket::class, 'id', 'ticket_id');
    }
}
