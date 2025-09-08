<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Exibe a página de configurações do usuário logado
     */
    public function edit()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado.');
        }

        return view('configuracoes', compact('user'));
    }

    /**
     * Atualiza os dados do usuário logado
     */
    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Usuário não autenticado.');
        }

        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Atualizar nome e email
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Atualizar senha somente se for enviada
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Salvar alterações no banco
        $user->save();

        return redirect()->route('config.edit')->with('success', 'Dados atualizados com sucesso!');
    }
}
