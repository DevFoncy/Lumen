<?php
/**
 * Created by PhpStorm.
 * User: Foncy
 * Date: 05/01/2018
 * Time: 06:09 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class EmployeesMarking extends  Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id','marking_date','marking_in','marking_out'
    ];
}