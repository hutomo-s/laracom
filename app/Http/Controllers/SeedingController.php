<?php

namespace App\Http\Controllers;

use App\Shop\Employees\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SeedingController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $adminCreate = Employee::create([            
	        'name' => 'admin',
	        'email' => 'admin@admin.com',            
	        'password' => bcrypt('admin'),        
    	]);

    	var_dump($adminCreate);
    }
}