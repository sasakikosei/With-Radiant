<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['comment','user_id','recruit_id','watch_id'];
    
    protected $table = 'comments';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function recruit()
    {
        return $this->belongsTo(Recruit::class);
    }
    
    public function watch()
    {
        return $this->belongsTo(Watch::class);
    }
}
