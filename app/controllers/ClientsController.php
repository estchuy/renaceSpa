<?php

class ClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('nombre')) {
			$clients = Client::whereRaw("(clients.name like ? or clients.company like ?)", array("%" . Input::get("nombre") . "%", "%" . Input::get("nombre") . "%"))  
			->get();
		}else{
			$clients = Client::all();
		}
		$perpage = 10;

		$this->layout->content = View::make('clients.index')            
		->with('perpage', $perpage)
		->with('clients', $clients);
	}

	public function calculoCuotas(){
		$this->layout->content = View::make('clients.calculoCuotas');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('clients.edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::get('id') != 0){ //update client
			
			$p = Client::find(Input::get('id'));
			$p->name = Input::get('nombre');
	    	$p->email = Input::get('email');
	    	$p->personal_id = Input::get('dpi');
	    	$p->address = Input::get('address');
	    	$p->phone = Input::get('phone');
	    	if(Input::has('company')){
	    		$p->company = Input::get('company');
	    	}
	    	$msg = "Cliente Actualizado!!!";

	    }else{
	    	
	    	$p = new Client();
	    	$p->name = Input::get('nombre');
	    	$p->email = Input::get('email');
	    	$p->personal_id = Input::get('dpi');
	    	$p->address = Input::get('address');
	    	$p->phone = Input::get('phone');
	    	if(Input::has('company')){
	    		$p->company = Input::get('company');
	    	}
	    	$msg = "Cliente Creado!!!";

	    }
    	$p->save();

    	Session::flash('notification', $msg);
		Session::flash('level', "alert alert-info");

    	return Redirect::to("/clients");
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::find($id);
		$loans = Loan::where('client_id', $id)->groupBy('parent_id')->get();
		$this->layout->content = View::make('clients.edit')            
		->with('client', $client)
		->with('loans', $loans)
		->with('edit', 1);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
