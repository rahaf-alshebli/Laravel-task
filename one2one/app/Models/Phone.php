<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Phone extends Model
{
    use HasFactory;
  
    /**
     * Get the user that owns the phone.
     * 
     * Syntax: return $this->belongsTo(Phone::class, 'foreign_key', 'owner_key');
     *
     * Example: return $this->belongsTo(Phone::class, 'user_id', 'id');        
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}