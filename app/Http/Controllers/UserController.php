<?php

namespace App\Http\Controllers;

use App\Models\AccountSettings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nik' => 'required',
            'swafoto' => 'required|image',
            'ktp' => 'required|image',
        ]);


        $file = $validateData['swafoto'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('user/swafoto/' . $filename, file_get_contents($file));


        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar');
        }

        $file_path_swafoto = 'user/swafoto/' . $filename;

        $file = $validateData['ktp'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('user/ktp/' . $filename, file_get_contents($file));

        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar');
        }

        $file_path_ktp = 'user/ktp/' . $filename;

        $user = new User();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = password_hash($validateData['password'], PASSWORD_DEFAULT);
        $user->username = $validateData['username'];
        $user->phone = $validateData['phone'];
        $user->address = $validateData['address'];
        $user->nik = $validateData['nik'];
        $user->is_active = 2;
        $user->swafoto = $file_path_swafoto;
        $user->ktp = $file_path_ktp;
        $save = $user->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }

        $account_Settings = new AccountSettings();
        $account_Settings->user_id = $user->id;
        $account_Settings->status = 'Perlu Tindakan';
        $save = $account_Settings->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }

        return redirect()->route('home');
    }

    public function getPermohonanAkun()
    {
        $account = AccountSettings::all();
        $data = [];
        $account->each(function ($user) {
            $data[] = $user->user_id;
        });
        dd($data);
    }
}
