<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;
use Todoparrot\Http\Requests;
use Todoparrot\TodoList;


class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display all records
		// Only use this for small number of records or with pagination
	
		$lists = TodoList::all();
		return view('lists.index')->with('lists', $lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
		try {
			$list = Todolist::findOrFail($id);
			return view('lists.show')->with('list', $list);
		} catch(\Exception $e) {
			\Debugbar::error('Lists Controller - show - No Data - id:' . $id);
			echo 'No Data for List - id:' . $id;	
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todolist::destroy($id);
		return \Redirect::route('list.index')
			->withMessage('Record deleted!');
    }
}
