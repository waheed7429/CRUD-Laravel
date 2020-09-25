<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >

@extends('layout')
    @section('content')
        <h1>view</h1>
            <table id="customers">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th >Image</th>
                    <th>Operations</th>
                </tr>
               @foreach ($items as $i)
                    <tr>
                        <td>{{$i['id']}}</td>
                         <td>{{$i['name']}}</td>
                        <td>{{$i['price']}}</td>
                         <td><img src="{{ URL::to('/') }}/images/{{ $i->img }}" class="img-thumbnail" width="75" /></td>
                        <td>
                            <a  href="{{'delete/'. $i ['id'] }}" ><button class="btn-danger">Delete</button></a>
                            <a  href="{{'edit/'. $i ['id'] }}" ><button class="btn-primary">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
    @endsection