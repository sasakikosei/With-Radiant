<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    use HasFactory;
    
    protected $fillable = ['content'];
    
    protected $table = 'recruit_members';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
