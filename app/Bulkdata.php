<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulkdata extends Model
{
	protected $table = "bulkdata";
	protected $fillable = ["student_name","email","phone","age","class","section","date_of_birth","f_name","m_name","date_of_join"];
}
