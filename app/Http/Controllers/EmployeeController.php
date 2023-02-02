<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use App\Models\Position;
use App\Models\Salary;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // View
        return view('page.employee', [
            'title' => 'Employee',
            'employees' => User::with(['position', 'level', 'salary'])->latest()->filter(request(['search', 'name', 'position', 'access']))->paginate(10)->withQueryString(),
            'positions' => Position::orderBy('name')->get(),
            'roles' => Level::orderBy('name')->get(),
            'salaries' => Salary::orderBy('ammount')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.new-employee', [
            'title' => 'New Employee',
            'positions' => Position::orderBy('name')->get(),
            'roles' => Level::orderBy('name')->get(),
            'salaries' => Salary::orderBy('ammount')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|max:15',
            'email' => 'required|email:dns|unique:users',
            'address' => 'max:100',
            'password' => 'required|min:5|max:255',
            'confPassword' => 'required|same:password',
            'position_id' => 'required',
            'salary_id' => 'required',
            'level_id' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['status'] = 'active';
        // $request->session()->flash('success',  'Success adding a new employee!!!');

        User::create($validated);
        return redirect('/new-employee')->with('success',  'Success adding a new employee!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('page.edit-employee', [
            'title' => 'Edit Employee',
            'user' => $user,
            'positions' => Position::orderBy('name')->get(),
            'roles' => Level::orderBy('name')->get(),
            'salaries' => Salary::orderBy('ammount')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|max:15',
            'email' => 'required|email:dns|unique:users',
            'address' => 'max:100',
            'password' => 'required|min:5|max:255',
            'position_id' => 'required',
            'salary_id' => 'required',
            'level_id' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['status'] = 'active';

        // User::where($validated);
        User::where('id', $user->id)
            ->update($validated);
        return redirect('/employee')->with('success',  'Success updating an employee!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        // Find Employee by username
        $employee = User::where('username', $username)->first();
        // Clear or delete employee data
        $employee->delete();
        // Redirect to employee page with succes message
        return redirect('/employee')->with('success', 'Employee deleted successfully!');
    }
}
