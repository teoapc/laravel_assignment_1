<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketComment extends Model
{
    protected $fillable = [
      'user_ticket_id', 'comment', 'status', 'ticket_comment_id'
    ];
    protected $primaryKey = 'ticket_comment_id';
    public $incrementing = false;

    public function ticket()
    {
        return $this->belongsTo(ticketInformation::class);
    }
}
