<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\error;


class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $data = User::latest()->paginate(5);
        return view('users.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    

    public function store(Request $request)
    {

        
        

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'age' =>'nullable',  
            'salary' =>'nullable',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:2048',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/workers/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        if ($document = $request->file('document')) {
            $destinationPath = 'images/workers/';
            $postDocument = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $postDocument);
            $input['document'] = "$postDocument";
        }
  
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $notification = array(
            'message'=> 'You Have Successfully Logout',
            'alert-type' => 'success'
        );
        return redirect()->route('users.index')
                        ->with($notification);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name',
            'email' => '|email|',
            'age' =>'nullable',  
            'salary' =>'nullable',
            'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:2048',
            'password',
            'roles',
        ]);
    
    
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/workers/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }else{
        unset($input['image']);
    }

        if ($document = $request->file('document')) {
            $destinationPath = 'images/workers/';
            $postDocument = date('YmdHis') . "." . $document->getClientOriginalExtension();
            $document->move($destinationPath, $postDocument);
            $input['document'] = "$postDocument";
        } else{
            unset($input['document']);
        }





        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}