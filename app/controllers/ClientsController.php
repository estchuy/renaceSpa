<?php

class ClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::select('clients.*', DB::raw('coalesce(loans.amnt, 0) as amnt, coalesce(loans.monthly_payment, 0) as monthly_payment, coalesce(loans.interest, "N/A") as interest, coalesce(loans.period_id, "N/A") as period_id') )
		->leftJoin('loans', 'loans.client_id', '=', 'clients.id')
		->get();
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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$loans = Loan::where('client_id', $id)->get();
		$this->layout->content = View::make('clients.edit')            
		->with('client', $client)
		->with('loans', $loans);
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
