<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    protected $table = 'user_informations';
    protected $fillable = [ 'user_id','user_first_name', 'user_last_name', 'user_ticket_id', 'user_email'];
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    public function tickets()
    {
        return $this->hasMany(ticketInformation::class);
    }

}
