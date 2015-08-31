<?php

class AuthController extends BaseController {

	public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            //del tipo de usuarios fx para saber que tipo de usuario
            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');
    }

	public function login()
	{
		$data = Input::only('email','password','remember');

		$credencial = ['email' => $data['email'], 'password' => $data['password'] ];
        
        if( Auth::attempt($credencial,$data['remember']) )
        {
            // we are now logged in, go to admin
            $id = Auth::id();
            $rol = Auth::user()->rol_id;
            switch ($rol) {
                case 2:
                     return Redirect::route('monitor');
                    break;

                case 3:
                    //return View::make('recolector');
                    return Redirect::route('recolector');
                    break;

                case 4:
                    return View::make('contador');
                    break;

                default:
                   return View::make('sesion');
                    break;
            }

            
        }
        else
        {
            // Si los datos no son los correctos volvemos al login y mostramos un error
			//return Redirect::back()->with('login_error',1);
              return Redirect::back()->with('login_error', 1)->withInput();

        }

	}

	public function logout()
	{
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'Logged out correctly');
	}

}
