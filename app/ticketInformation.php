<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketInformation extends Model
{
    protected $table = 'ticket_informations';
    protected $fillable = [ 'operating_system','software_issue', 'description', 'user_ticket_id', 'status', 'user_id','escalation_level','priority_level' ];
    protected $primaryKey = 'user_ticket_id';
    public $incrementing = false;


    public function comments()
    {
        return $this->hasMany(ticketComment::class);
    }

    public function user()
    {
        return $this->belongsTo(userInformation::class, 'user_id');
    }
}
