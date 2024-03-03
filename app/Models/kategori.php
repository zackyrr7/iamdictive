<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'kategoris_id', 'id');
    }
}
