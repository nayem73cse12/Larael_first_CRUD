<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

	protected $table = 'todo';
	protected $filename=['work','status','created_at'];


}
