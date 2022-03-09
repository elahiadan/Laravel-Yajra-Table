<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\User;

class DatatablesController extends Controller
{

    public function datatableByAjax(){
        return view('normal-datatable');
    }
    public function getData()
    {
        return Datatables::of(User::query())

            // Visit https://datatables.yajrabox.com/starter
            // https://yajrabox.com/docs/laravel-datatables/master/row-options
            ////////// Either you can set ID this way  //////////
            // Set the ID of the row with id
            // ->setRowId('id')

            // Set the ID of the row with name
            // ->setRowId('name')

            ////////// Either you can set ID this way  //////////
            ->setRowId(function ($user) {
                return $user->id;
            })

            ////////// Either you can set ID this way  //////////
            // ->setRowId('{{$id}}')


            // Adding a new Column ('column-name','html')
            ->addColumn('action', '<button class="btn btn-info" onclick="hello({{$id}})">View</button><button class="btn btn-dark">Edit</button><button class="btn btn-danger">Delete</button>')

            // Adding a new Column ('column-name','html')
            ->addColumn('url', '<a href="{{$email}}-{{$id}}">{{$email}}-{{$id}}</a>')

            // define the column and send to view file
            ->rawColumns(['action', 'url'])

             // Set the Class of the row 
            ->setRowClass(function ($user) {
                return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })

            // execution
            ->make(true);
    }
}
