<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';

    protected $fillable = [
      'recipient', 'title', 'content', 'is_sent'
    ];
}
