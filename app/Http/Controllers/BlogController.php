<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function view(int $id)
    {
        return view('blogs.view', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:100',
            'autor'     => 'required|string|max:100',
            'synopsis'  => 'nullable|string',
            'fecha'     => 'required|date',
            'categoria' => 'required|in:guia,reseña',
            'informacion' => 'nullable|string',
        ]);

        Blog::create($request->all());

        return redirect()
            ->route('blogs.index')
            ->with('feedback.message', 'El blog <b>' . e($request->titulo) . '</b> fue publicado exitosamente.');
    }

    public function delete(int $id)
    {
        return view('blogs.delete', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function destroy(int $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()
            ->route('blogs.index')
            ->with('feedback.message', 'El blog <b>' . e($blog->titulo) . '</b> fue eliminado exitosamente.');
    }

    public function edit(int $id)
    {
        return view('blogs.edit', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->authorize('admin');
        $request->validate([
            'titulo'    => 'required|string|max:100',
            'autor'     => 'required|string|max:100',
            'synopsis'  => 'nullable|string',
            'fecha'     => 'required|date',
            'categoria' => 'required|in:guia,reseña',
            'informacion' => 'nullable|string',
        ]);

        $blog = Blog::findOrFail($id);
        $data['informacion'] = $request->input('informacion', '');
        $blog->update($request->all());

        return redirect()
            ->route('blogs.index')
            ->with('feedback.message', 'El blog <b>' . e($blog->titulo) . '</b> fue actualizado correctamente.');
    }
}