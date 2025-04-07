<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employee_id';
    public $timestamps = false; // Assuming no timestamps

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function dependents()
    {
        return $this->hasMany(Dependent::class, 'employee_id');
    }
}