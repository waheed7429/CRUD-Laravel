<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class item extends Controller
{
    //
    function list()
    {
        $data=Items::all();
        return view('view',['items'=>$data]);
    }
    function create()
    {
        return view('create');
    }
    public function createSubmit(Request $req)
    {
        $image = $req->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        $item=new Items();
        $item->name=$req->name;
        $item->price=$req->price;
        $item->quantity=$req->quant;
        $item->img = $new_name;
        $item->save();
        return redirect('list');
    }
    function delete($id)
    {
        $data=Items::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data=Items::find($id);
        return view('edit',['data'=>$data]);
    }
    function Update(Request $req)
    {
        $data=Items::find($req->id);
        $image = $req->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $data->name=$req->name;
        $data->price=$req->price;
        $data->quantity=$req->quant;
        $data->img = $new_name;
        $data->save();
        return redirect('list');

    }
}
