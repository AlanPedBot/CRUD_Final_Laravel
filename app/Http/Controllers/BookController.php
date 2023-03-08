<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home()
    {
        return view('site.home');
    }
    public function create(Request $request)
    {
        $model = new BookModel();
        if ($request->input('_token') != '') {

            $validations =
                [
                    'name' => 'required',
                    'session_id' => 'required'
                ];
            $feedback = [
                'name.required' => 'O campo nome é obrigatório',
                'session_id.required' => 'O campo é obrigatório'
            ];
            $request->validate($validations, $feedback);
        }
        $name = $model->name = $request->input('name');
        $model->session_id = $request->input('session_id');
        if ($name) {
            $model->save();
            session()->flash('create', 'Livro inserido com sucesso!!');
            return view('site.create');
        } else {
            return view('site.create');
        }
    }
    public function read(Request $request)
    {
        if ($request->input('_token') != '') {

            $validations =
                [
                    'name' => 'required'
                ];
            $feedback = [
                'name.required' => 'O campo nome é obrigatório'
            ];
            $request->validate($validations, $feedback);
        }
        $name = $request->input('name');
        if ($name) {
            $books = DB::table('book_models')
                ->where('name', 'like', '%' . $name . '%')
                ->paginate(5);
            session()->flash('read', 'Busca realizada com sucesso!!!');
            return view('site.read', ['books' => $books, 'request' => $request->all()]);
        } elseif ($name == 0) {
            $books = [];
            session()->flash('erro', 'O livro não existe!!!');
            return view('site.read',  ['books' => $books]);
        }
    }
    public function edit($id)
    {
        $book = BookModel::find($id);
        return view('site.edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $book = BookModel::find($id);
        $book->name = $request->input('name');
        $book->session_id = $request->input('session_id');
        $book->save();
        if ($book) {
            session()->flash('update', 'Alteração realizada com sucesso!!!');
            return redirect()->route('site.read');
        } else {
            session()->flash('erro', 'Erro!!!');
            return redirect()->route('site.read');
        }
    }
    public function destroy($id)
    {
        $book = BookModel::findOrFail($id);
        $book->delete();
        session()->flash('delete', 'Livro deletado com sucesso!!');
        return redirect()->route('site.read');
    }
}
