<?php

namespace App\Http\Controllers;
use App\Model\Register;




use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class CrudController extends Controller
{
    
    
    public function destroy($id)
    {
       
		// redirect
		return redirect('show')->with('message', 'Successfully deleted the blog!');
        //
    }
}
