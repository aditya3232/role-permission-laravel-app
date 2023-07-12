<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDOException;
use Throwable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit() {
        try {
            $id = auth()->user()->id;
            $data = User::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        }

        return view('mazer_template.admin.profiles.edit', compact('data'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request) {
        try {
            $id = auth()->user()->id;
            User::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal update profile!');
            return back();
        }

        $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        try {
            User::where('id',$id)
                ->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->password),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal update profile!');
            return back();
        }

        Alert::success('Sukses', 'Update profile berhasil');
        return back();
    }

}