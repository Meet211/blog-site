<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ManageBlog extends Controller
{
    public function index()
    {
        $edit_blog = [];
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $edit_blog = Blog::findOrFail($_GET['id']);
        }
        $categories = Category::all()->toArray();
        return view('admin.manage-blog', ['edit_blog' => $edit_blog, 'categories' => $categories]);
    }
    public function delete(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        if($blog){
            $blog->delete();
            return json_encode([
                'error' => false,
                'message' => "Blog Deleted Successfully"
            ]);
        }
        return json_encode([
            'error' => true,
            'message' => "Blog Not Found"
        ]);
    }
    public function save(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'read_time' => 'required|string|max:50',
            'category' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'nullable|exists:blogs,id'
        ]);

        if ($validated->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validated->errors()->first()
            ]);
        }

        $blog = $request->has('id')
            ? Blog::findOrFail($request['id'])
            : new Blog();
        $blog->title = $request['title'];
        $blog->description = $request['description'];
        $blog->read_time = $request['read_time'];
        $blog->category_id = $request['category'];

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }

            $imagePath = $request->file('image')->store('blog_images', 'public');
            $blog->image = $imagePath;
        }
        $blog->save();

        return json_encode([
            'error' => false,
            'message' => $request->has('id') ? "Blog Updated Successfully" : "Blog Created Successfully"
        ]);
    }
}
