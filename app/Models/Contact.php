<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table = "contact";

    public function scopeSearch($query, $search) {
        $query->when($search, function ($query) use ($search) {
            $query->where('name','LIKE',"%". $search->get('search') . "%");
        });

        return $query;
    }
}
