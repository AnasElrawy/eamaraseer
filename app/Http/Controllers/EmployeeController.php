<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // التأكد أن الأدمن فقط يمكنه الوصول
    }

    public function index()
    {
        $employees = User::where('role', 'employee')->get();
        return view('dashboard.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('dashboard.employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'employee', // تعيين الدور كـ موظف
        ]);

        return redirect()->route('employees.index')->with('success', 'تمت إضافة الموظف بنجاح');
    }

    public function edit($id)
    {
        $employee = User::where('role', 'employee')->findOrFail($id);
        return view('dashboard.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = User::where('role', 'employee')->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $employee->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $employee->password,
        ]);

        return redirect()->route('employees.index')->with('success', 'تم تحديث الموظف بنجاح');
    }

    public function destroy($id)
    {
        $employee = User::where('role', 'employee')->findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'تم حذف الموظف بنجاح');
    }
}
