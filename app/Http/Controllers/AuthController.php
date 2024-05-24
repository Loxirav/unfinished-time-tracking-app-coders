<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Assuming 'Product' is used as the User model

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('products.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $product = Product::where('email', $credentials['email'])->first();

        if ($product && $product->password === $credentials['password']) {
            // Successful login
            session(['product' => $product->id]); // Storing user id in session
            return redirect(route('product.index'));
        } else {
            // Failed login
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }
}
