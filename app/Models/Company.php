<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Company extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = "companies";
    protected $fillable = [
        'name', 'img',  "desc", "address","website","facebook","twitter","youtube"
    ];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}