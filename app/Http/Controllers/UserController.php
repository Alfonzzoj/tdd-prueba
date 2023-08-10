<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller {

    public $title = "Usuarios";
    public $description = "Crud";
    /**
     * Display user members of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = $this->title." registrados";
        $description = "Crud de ".$this->description;
        return view('users.index',compact('title','description'));
    }

    public function edit($language,User $user){
        $title = "Editar ".$this->title." (".$user->name."-".$user->id.")";
        $description = "Crud de ".$this->description;
        $roles = Role::all();

        return view('users.edit',compact('user','title','description','roles'));
    }

    public function update($language,Request $request,User $user){
        $request->validate([
            'roles' => 'required|array|min:1',
        ]);
        // $user->update($request->all());
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index',$request->language)->with('msg','El usuario se actualizo con exito');
    }

    /**
     * Display user grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function grid(){
        $title = "User Grid";
        $description = "Some description for the page";
        return view('pages.applications.user.grid',compact('title','description'));
    }

    /**
     * Display user list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "User List";
        $description = "Some description for the page";
        return view('pages.applications.user.list',compact('title','description'));
    }

    /**
     * Display user grid style of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function gridStyle(){
        $title = "User Grid Style List";
        $description = "Some description for the page";
        return view('pages.applications.user.grid_style',compact('title','description'));
    }

    /**
     * Display user group of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function userGroup(){
        $title = "User Group List";
        $description = "Some description for the page";
        return view('pages.applications.user.user_group',compact('title','description'));
    }

    /**
     * Display user add of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function add(){
        $title = "User Add";
        $description = "Some description for the page";
        return view('pages.applications.user.add',compact('title','description'));
    }

    /**
     * Display user table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function table(){
        $title = "User Data Table";
        $description = "Some description for the page";
        return view('pages.applications.user.data_table',compact('title','description'));
    }
}
