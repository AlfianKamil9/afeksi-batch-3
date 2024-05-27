<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyEbook extends Model
{
    use HasFactory;

    protected $table = 'my_ebooks';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id', 'book_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function my_ebooks()
    {
        return $this->belongsTo(Ebook::class, 'book_id', 'id');
    }
}
