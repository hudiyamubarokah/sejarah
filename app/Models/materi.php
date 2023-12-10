<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $table = "materi";

    protected $guarded = 'id';

    protected $fillable = [
        "judul", "materi", "link_vd", "nama_file"
    ];

}
