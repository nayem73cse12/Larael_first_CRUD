<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use Illuminate\Http\Request;
use Input;
use App\Task;

class TodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data=Task::all();
		return view('home')->with('data',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	
	public function store(CreateTaskRequest $request)
	{

		$data=[
			'work'=>Input::get('workName'),
            'status'=>'Incomplete'
			];
 
       $response=Task::create($data);
       if($response){
       	return redirect()->back();
       }
        
	}

	
	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		$data=task::find($id);
		return view('todo-edit')->with('data',$data);
	}

	
	public function update(CreateTaskRequest $request,$id)
	{
		$data=[
			'work'=>Input::get('workName'),
            'status'=>Input::get('status')
			];
 
       $response=Task::find($id)->update($data);
       if($response){
       	return redirect('/');
       }
	}

	
	public function destroy($id)
	{
		$response=Task::find($id)->delete();
		if($response){
			return redirect('/');
		}
	}

}
