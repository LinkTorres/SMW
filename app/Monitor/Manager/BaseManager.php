<?php namespace Monitor\Manager;
//CRUP

abstract class BaseManager {
	
	protected $entity;
	protected $error;
	protected $data;
	protected $id;
	public function __construct($entity, $data ){
		$this->entity=$entity;
		$this->data=array_only($data, array_keys($this->getRules()));
	}

	abstract public function getRules();
	
	public function isValid(){
		$validation= \Validator::make($this->data,$this->getRules());
		$isValid= $validation->passes();
		$this->error=$validation->messages();
		
		return $isValid;
	}
	
	public function save()
	{
		if(! $this->isValid())
		{
		return false;	
		}
		else
		{
			
			$this->entity->fill($this->data);
			$this->entity->save();
			
			
			return true;
		}
	}
	public function getErrors()
	{
		return $this->error;	
	}
	
	public function getId(){
		return $this->entity->id;
	}
	/*
	 
	 public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}
	*/
}
