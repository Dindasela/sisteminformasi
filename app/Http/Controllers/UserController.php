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
        $status = request()->query('status');
        $search = request()->query('search');
        $data = User::where(function ($query) use ($search) {
            if($search){
                $query->where('name', 'LIKE', '%' . $search . '%');
            }
        })->WhereHas('settings', function ($query) use ($status) {
            $query->where('status', '!=' , 'Diterima');
            if($status){
                $query->where('status', $status);
            }
        })->paginate(10);
        return view('pages.admin.kelolaakun.permohonan-akun', compact('data'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.admin.kelolaakun.lihat-permohonan-akun', compact('user'));
    }

    public  function daftarAkunIndex(){
        $data = User::query();

        $data->each(function ($data) {
           $data->whereDoesntHave('settings'); 
        });

        $data = $data->paginate(10);

        return view('pages/admin/kelolaakun/daftar-akun', compact('data'));
    }

    public  function daftarAkunShow(Request $request){
        $data = User::where('id', $request->query('id'))->first();
        return view('pages/admin/kelolaakun/lihat-akun', compact('data'));
    }

    public function terimaPermohonan($id){
        $data = AccountSettings::where('user_id', $id)->first();
        $data->update(['status' => 'Diterima']);
        return redirect()->route('permohonan-akun');
    }

    public function tolakPermohonan($id){
        $data = AccountSettings::where('user_id', $id)->first();
        $data->update(['status' => 'Ditolak']);
        return redirect()->route('permohonan-akun');
    }

    public function destroy($id){
        $data = User::findOrFail($id);
        $delete = $data->delete();
        if (!$delete) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->route('daftar-akun.index');
    }
}
