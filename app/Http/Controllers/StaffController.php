<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('staff_list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff_new');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);


        if($validator)
        {
            $imgfile = $request->file('profile');

            $user = new \App\User;
            $user->name      = $request->input('name');
            $user->email     = $request->input('email');
            $user->password  = Hash::make('123456789');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/user/',$fileNameToStore);

                $path = '/storage/user/'.$fileNameToStore;
                $user->photo = $path;
            }

            $user->photo = $path;
            $user->save();

            $user->assignRole('staff');


            return redirect('staff')->with("success_flashmsg", "New Staff is ADDED in your data");
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = User::find($id);

        return view('staff_edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imgfile = $request->file('image');
        $oldpassword = $request->input('oldpassword');
        $newpassword = $request->input('password');

        if ($newpassword == null) 
        {
            $password = $oldpassword;
        }
        else
        {
            $password = $newpassword;
        }

        $user=User::find($id);
        $user->name      = $request->input('name');
        $user->email     = $request->input('email');
        $user->password  = $password;


        $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/user/',$fileNameToStore);

                $path = '/storage/user/'.$fileNameToStore;
                $user->photo = $path;
            }

            else
            {
                $path = $request->input('oldphoto');
                $user->photo = $path;
            }

            $user->photo = $path;
            $user->save();

            $user->assignRole('staff');
            



        return redirect('staff')->with("success_flashmsg", "Existing Item is Updated in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff=User::find($id);
        $staff->delete();

        return redirect('staff')->with("success_flashmsg", "Existing Staff is Deleted in your data");
    }
}
