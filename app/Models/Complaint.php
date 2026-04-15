<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'student_name',
        'nis',
        'category_id',
        'complaint',
        'status',
        'feedback',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
