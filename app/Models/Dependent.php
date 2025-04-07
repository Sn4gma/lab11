<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;

    protected $primaryKey = 'dependent_id';
    public $timestamps = false; // Assuming no timestamps

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}