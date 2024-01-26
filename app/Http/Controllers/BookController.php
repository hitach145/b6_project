<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getAll()
    {
        $listBook= DB::table("book") -> get();
            return view("book",["listBook" => $listBook]);
    }

    public function bookDetail($id)
    {
        $book = DB::table("book")->find($id);
        return view("book_detail", ["book" => $book]);
    }

    public function bookDelete($id)
    {
        DB::table("book") -> delete($id);
            return redirect("/book");
    }


    public function saveBookCreate(Request $request)
    {
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImagePath = $coverImage->store('public');

            DB::table("book")->insert([
                "ISBN_code" => $request->ISBN_code,
                "publisher" => $request->publisher,
                "author" => $request->author,
                "category" => $request->category,
                "number_page" => $request->number_page,
                "cover_image" => $coverImagePath,
                "cost" => $request->cost
            ]);
        }

        return redirect("/book");
    }

    public function bookEdit($id)
    {
        $row = DB::table('book')->find($id);

        return view('book_update', ['row' => $row]);
    }


    public function bookUpdate(Request $request)
    {
        $bookId = $request->input('id');
        $ISBN = $request->input('ISBN_code');
        $publisher = $request->input('publisher');
        $number_page = $request->input('number_page');
        $author = $request->input('author');
        $category = $request->input('category');
        $cover_image = $request->input('cover_image');
        $cost = $request->input('cost');
        DB::table('book')
            ->where('id', $bookId)
            ->update([
                "id" => $bookId,
                "ISBN_code" => $ISBN,
                "author" => $author,
                "publisher" => $publisher,
                "number_page" => $number_page,
                "category" => $category,
                "cover_image" => $cover_image,
                "cost" => $cost
            ]);
        return redirect("/book");
    }
}
