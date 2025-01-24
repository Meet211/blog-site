<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManageCategories extends Controller
{
    public function index()
    {
        $categories = Category::all()->toArray();
        return view('admin.categories', ['categories' => $categories]);
    }
    public function manage()
    {
        $edit_category = [];
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $edit_category = Category::findOrFail($_GET['id']);
        }
        return view('admin.manage-category', ['edit_category' => $edit_category]);
    }

    public function save(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'id' => 'nullable|exists:categories,id',
            'name' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validated->errors()->first()
            ]);
        }

        $blog = $request->has('id')
            ? Category::findOrFail($request['id'])
            : new Category();
        $blog->name = $request['name'];

        $blog->save();

        return json_encode([
            'error' => false,
            'message' => $request->has('id') ? "Category Updated Successfully" : "Category Created Successfully"
        ]);
    }
}
