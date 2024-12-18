<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data'; // Pastikan nama tabel sesuai dengan yang ada di database

    use HasFactory;
    protected $fillable = [
        'student_id',
        'beasiswa_id',
        'application_status',
        'submission_date',
    ];
    // Relasi ke Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Relasi ke Scholarship (Beasiswa)
    public function beasiswa()
    {
        return $this->belongsTo(Scholarship::class, 'beasiswa_id');
    }
}

