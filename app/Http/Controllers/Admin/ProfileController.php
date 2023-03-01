<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    //

    public function edit(User $user)
    {
        return view('admin.user.create', compact('user'));
    }

    public function updateImage(Request $request, User $user)
    {
        if ($request->hasFile('user_image')) {
            $primaryImage = $request->file('user_image');
            $image_name = date('Y-m-d-H-i:s') . "_" . uniqid() . $request->file('user_image')->getClientOriginalName();
            $primaryImage->move(public_path(env('PRODUCT_IMAGE_PATH')), $image_name);
            $user->user_image = $image_name;
            $user->update();
            return redirect()->back();
        }
    }

    public function update(Request $request, User $user)
    {
        $pass = $request->validate([
            'password' => 'confirmed'
        ]);

//        return $user->password . '<br>' . encrypt($pass['password']) ;
        $user->name = $request->name;
        $user->job = $request->job;
        $user->years_of_work = $request->years_of_work;
        $user->project_done = $request->project_done;
        $user->colab_with_company = $request->colab_with_company;
        $user->instagram = $request->instagram;
        $user->telegram = $request->telegram;
        $user->whatsapp = $request->whatsapp;
        $user->phone = $request->phone;
        $user->linkedin = $request->linkedin;

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->update();


        toast('اطلاعات با موفقیت ویرایش شد', 'success');
        return redirect()->back();
    }
}
