<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;
    
    protected $fillable = ['content'];
    
    protected $table = 'watch_members';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
