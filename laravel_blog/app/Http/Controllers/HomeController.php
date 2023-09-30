<?php

namespace App\Http\Controllers; //this will tell  where 'HomeController'   code is located

use App\Modules\Home\HomeService; //import module named "Home" with a HomeService class inside it.
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *   In the constructor of your controller, you're injecting an instance of HomeService using constructor injection.
     *   This means that whenever an instance of HomeController is created,
     *   it will automatically receive an instance of HomeService. 
     *   This is a common practice in Laravel for dependency injection.
     */
    
    public function __construct(
        public readonly HomeService $homeService

    )
    {
        
    }
   

    

    public function home(Request $request) {

        return view('home',$this->homeService->home($request));
 
    }

    // You've defined a home method in your controller, which appears to render a view called 'home' and 
    // pass the result of calling the home method on the injected HomeService as
    // data to the view.
}
