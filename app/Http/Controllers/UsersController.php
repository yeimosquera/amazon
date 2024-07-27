<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function Index()
    {
        return view('users/index');
    }



    public function save(Request $request)
    {
        try {
            // Validar la solicitud
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            // Crear el usuario utilizando la asignación masiva
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            // Devolver una respuesta exitosa
            return response()->json(['message' => 'Usuario creado con éxito'], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Manejo de errores de validación
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Manejo de cualquier otro error
            return response()->json(['error' => 'Error al crear el usuario', 'details' => $e->getMessage()], 500);
        }
    }
}
