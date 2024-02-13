<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificates extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employee_name',
        'qr_code',
        'certificate_status',
        'pdf_file_path',
    ];

}
