<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function edit()
    {
        // Pegamos o usuário logado
        $user = Auth::user();
        return view('configuracoes', compact('user'));
    }

    public function update(Request $request)
    {

        dd(Auth::user());
        $user = Auth::user();

        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Atualizar nome e email
        $user->name = $request->name;
        $user->email = $request->email;

        // Atualizar senha somente se o campo não estiver vazio
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('config.edit')->with('success', 'Dados atualizados com sucesso!');
    }
}
