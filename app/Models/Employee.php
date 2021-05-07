<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey ='id';
    protected $fillable=[
        'names_employees',
        'lastnames_employees',
        'emails_employees',
        'documents_employees',
        'genders_employees'];
}
