<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\User;

class Status extends Model
{
    use HasFactory;

    protected $table = "status";
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
