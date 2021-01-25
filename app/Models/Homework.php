<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $table = 'homeworks';

    protected $fillable = [
        'subject',
        'abbrev',
        'source',
        'deadline_date',
        'deadline_time',
        'group',
        'file_attachments',
        'details',
    ];
}
