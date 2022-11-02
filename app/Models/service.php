<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'entry'; 
    protected $fillable = ["pin","names","email","phone","changed_phone","changed_email", "category", "specificcategory", "officer", "region","station", "workstation", "service_date"];
    public $timestamps = false;
}
