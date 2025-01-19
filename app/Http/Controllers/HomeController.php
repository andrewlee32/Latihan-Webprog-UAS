<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = Menu::paginate(3);
        return view('home', compact('menus'));
    }

    public function menus() {
        $menus = Menu::paginate(3);
        return view('menus', compact('menus'));
    }

    public function searchmenu(Request $request) {
        $query = $request->input('query');
        $menus = Menu::where('name', 'LIKE', '%'. $query . '%')->paginate(3);
        return view('menus', compact('menus'));
    }

    public function menuDetail($id) {
        $menu = Menu::where('menu_id', 'LIKE', $id)->first();
        return view('menuDetail', compact('menu'));
    }

    public function restaurants(){
        $restaurant = Restaurant::paginate(3);
        return view('restaurants', compact('restaurant'));
    }

    public function searchrestaurant(Request $request) {
        $query = $request->input('query');
        $restaurants = Restaurant::where('name', 'LIKE', '%'.$query. '%')->paginate(3);
        return view('restaurants', compact('restaurants'));
    }

    public function aboutus() {
        return view('aboutus');
    }

    public function profile() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function editprofile(Request $request, $id){
    // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'Telp' => 'required|regex:/^[0-9]+$/',
            'password' => 'required|string|min:8', // Current password (for verification)
            'newpassword' => 'nullable|string|min:8|confirmed', // New password field
            'new2password' => 'nullable|string|min:8', // Confirm new password (use the 'confirmed' rule instead)
        ]);

        // Get the authenticated user
        $user = User::findOrFail($id);

        // Check if the entered current password is correct
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Incorrect Password.']);
        }

        // Prepare the data to update (without password first)
        $dataToUpdate = [
            'name' => $request->name,
            'email' => $request->email,
            'Telp' => $request->Telp,
        ];

        $user->update($dataToUpdate);


        // Redirect back to the profile page with a success message
        return redirect()->route('profile', ['id' => $user->id])->with('success', 'Information updated successfully.');
    }

    public function changepassword() {
        return view('changepassword');
    }

    public function updatepassword(Request $request, $id) {
        $request->validate([
            'password' => 'required|string',
            'newpassword' => 'required|string|min:8',
            'new2password' => 'required|string|same:newpassword',
        ]);

        $user = User::findOrFail($id);

        // Check if current password is correct
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Incorrect Password.']);
        }

        // Update password
        $user->update([
            'password' => Hash::make($request->newpassword),
        ]);

        Auth::logout();

        // Redirect to the login page with a success message
        return redirect()->route('home')->with('success', 'Password updated successfully. Please log in again.');
    }




}
