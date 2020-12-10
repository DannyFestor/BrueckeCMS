<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'parent_id', 'title', 'uri', 'order'];

    public function menu() {
        return $this->belongsTo(Menu::class);
    }

    public function type() {
        return $this->belongsTo(PostType::class, 'post_type_id');
    }
}
