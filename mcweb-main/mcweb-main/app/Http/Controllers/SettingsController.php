<php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use Illuminate\Support\Facades\Auth;
 
class SettingsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin'); //If user is not logged in then he can't access this page
    }
 
    public function edit($id)
    {
        $users = admin::find(Auth::user()->id);
        return view('backend.settings.updatepassword',compact('users'));
    }
 
 
    public function update(Request $request, $id)
    {
 
         $this->validate($request, [
 
        'oldpassword' => 'required',
        'newpassword' => 'required',
        ]);
 
 
 
       $hashedPassword = Auth::user()->password;
 
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
 
              $users =admin::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              admin::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','new password can not be the old password!');
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash('message','old password doesnt matched ');
               return redirect()->back();
             }
 
       }
 
}