<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $dueDate
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Task extends Model
{
    
    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'dueDate' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','dueDate'];



}
