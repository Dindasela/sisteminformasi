<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountSettings extends Model
{
    protected $table = 'account_settings';

    protected $fillable = [
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}