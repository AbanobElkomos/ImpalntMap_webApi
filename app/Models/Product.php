<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = "products";
    protected $fillable = [
        "company_id",
        "name",
        "img",
        "Type",
        "Level",
        "Connection_Type",
        "Connection_Feature",
        "Connection_Shape",
        "Screwdriver_Shape",
        "Screwdriver_Size",
        "Head_Shape",
        "Head_Microthreads",
        "Body_Shape",
        "Body_Threads",
        "Apex_Shape",
        "Apex_Hole",
        "Apex_Grooves"

    ];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function Company()
    {
        return $this->belongsTo(Company::class, "company_id");
    }
}