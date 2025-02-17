<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
