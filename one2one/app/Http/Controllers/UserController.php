<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
  
class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $user = User::find(1);
   
        $phone = new Phone;
        $phone->phone = '9429343852';
           
        $user->phone()->save($phone);
    }
}