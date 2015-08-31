<?php namespace Monitor\Entities;


class Cliente extends \Eloquent {

	protected $fillable = ['nombre','direccion','nacimiento','telefono','correo','ruta_id'];

	//protected $table = 'clientes';
	
	public function setPasswordAttribute($value)
    {
        if ( ! empty ($value))
        {
            $this->attributes['password'] = Hash::make($value);
        }
    }


	public function setSlugAttribute(){
		
		$this->attributes['slug'] = \Str::slug($this->atributtes['nombre']);

	}

	public function ruta()
	{
		return $this->belongsTo('Monitor\Entities\Ruta');
	}


}