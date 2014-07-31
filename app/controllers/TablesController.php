<?php

use Petrovic\Transformers\TableTransformer;

class TablesController extends \BaseController {

	/**
	 * @var Petrovic\Transformers\TableTransformer
	 */
	protected $tableTransformer;

	public function __construct(TableTransformer $tableTransformer)
	{
		$this->tableTransformer = $tableTransformer;
	}

	/**
	 * Display a listing of the resource.
	 * GET /table
	 *
	 * @return Response
	 */
	public function index()
	{
		$perPage = Input::get('perPage');
		$tables =  Table::paginate($perPage);
		return  Response::json(['data' => $this->tableTransformer->transformCollection($tables->getCollection()->all()),
			'paginator' => $this->tableTransformer->paginate($tables)], 200);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /table/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /table
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}

	/**
	 * Display the specified resource.
	 * GET /table/{id}
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
	 * GET /table/{id}/edit
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
	 * PUT /table/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function reserve($id)
	{
		$table = Table::find($id);
		$table->reserved = 1;
		$table->available = 0;
		$table->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /table/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}