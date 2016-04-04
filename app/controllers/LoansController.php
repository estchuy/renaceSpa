<?php

class LoansController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$client = Client::find($id);
		
		$this->layout->content = View::make('loans.create')            
		->with('client', $client);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		foreach(Input::get('cuotas') as $period_id => $cuota){
			$p = new Loan();
			$p->client_id = Input::get('client_id');
  			$p->amnt = Input::get('amnt');
  			$p->period_id = $period_id;
  			$p->monthly_payment = $cuota['cuotaMensual'];
  			$p->interest = Input::get('interesGlobal');
  			$p->interest_fee = $cuota['interes'];
  			$p->capital = $cuota['capitalMes'];
  			$p->balance = $cuota['capital'];
  			if($period_id > 1){
  				$p->parent_id = $parent_id;
  			}
  			$p->pay = 0;

  			$p->save();
  			if($period_id == 1){
  				$parent_id = $p->id;

  				$p->parent_id = $p->id;
  				$p->save();
  			}
		}

		Session::flash('notification', 'Prestamo creado y asociado a Cliente');
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
		//
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

	public function consolidado()
	{
		//
	}

	public function detallado()
	{
		//
	}

	public function periodo()
	{
		//
	}


}
