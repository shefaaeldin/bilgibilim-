<?php

namespace App\Http\Controllers\Ajax;
use Yajra\DataTables\Facades\DataTables;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleAjaxController extends Controller
{
     public function index() {

        
        return Datatables::of(article::query())
                        ->addColumn('delete_article', function($row) {
                            return route("articles.destroy", $row->id);
                        })
                        ->addColumn('edit_article', function($row) {
                            return route("articles.edit", $row->id);
                        })
                        ->make(true);
    }
}
