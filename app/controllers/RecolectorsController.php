<?php

use Monitor\Repositories\RecolectorRepo;
use Monitor\Manager\RegisterRecolectorManager;
use Monitor\Manager\Monitor\Manager;
class RecolectorsController extends \BaseController {

	protected $recolectorRepo;
	
	public function __construct(RecolectorRepo $recolectorRepo)
	{
		$this->recolectorRepo=$recolectorRepo;
	}
	
	public function index()
	{
		$recolectors = $this->recolectorRepo->all();
		
		$id = Auth::id();
        $rol = Auth::user()->rol_id;
       

        switch ($rol) {
                case 2:
                    return View::make('recolectors.indexM',compact('recolectors')) ;
                    break;

                case 3:
                    	
                break;
                case 4:
                    break;
                default:
                   return View::make('recolectors.index',compact('recolectors')) ;
                    break;
            }


		
	}

	/**
	 * Show the form for creating a new recolector
	 *
	 * @return Response
	 */
	public function create()
	{
		$zonas = $this->recolectorRepo->lista_zonas();
		$horarios=$this->recolectorRepo->lista_horarios();
		return View::make('recolectors.create',compact('zonas','horarios')) ;
		
	}

	/**
	 * Store a newly created recolector in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$recolector= $this->recolectorRepo->newRecolector();
		$data=Input::all();
		$manager = new RegisterRecolectorManager($recolector,$data);
		
		if($manager->save())
		{
			return Redirect::route('recolectors');
			
		}
		
		else
		{
			
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
			
		}
	}

	/**
	 * Display the specified recolector.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug,$id)
	{
		$recolector = $this->recolectorRepo->find($id, null);
		$zonas = $this->recolectorRepo->lista_zonas();
		$horarios=$this->recolectorRepo->lista_horarios();
		return View::make('recolectors.show',compact('zonas','horarios','recolector')) ;
	}

	/**
	 * Show the form for editing the specified recolector.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$zonas = $this->recolectorRepo->lista_zonas();
		$recolector = $this->recolectorRepo->find($id, null);
		$horarios=$this->recolectorRepo->lista_horarios();
		return View::make('recolectors.edit',compact('zonas','horarios','recolector')) ;
	}

	/**
	 * Update the specified recolector in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$recolector = $this->recolectorRepo->find($id,null);
		$manager = new RegisterRecolectorManager($recolector,Input::all());
		
		if($manager->save())
		{
			return Redirect::route('recolectors');
		}
		
		else
		{
			return Redirect::back()->withInput()->withErrors($manager->getErrors());
		}
	}

	/**
	 * Remove the specified recolector from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Recolector::destroy($id);

		return Redirect::route('recolectors.index');
	}

}
