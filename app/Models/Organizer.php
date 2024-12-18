<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model (opsional)
    protected $table = 'organizers';

    // Tentukan kolom yang dapat diisi (fillable) atau kolom yang tidak dapat diisi (guarded)
    protected $fillable = ['name', 'photo', 'phone', 'address'];
}
