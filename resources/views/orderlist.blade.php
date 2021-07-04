
@extends('master')
@section('content')
<div class="custom_product">
    <div class="col-md-6">
    <table class="table table-sm table-dark">
    
   
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['price']}}</td>
                <td>{{$item['category']}}</td>
            </tr>
        @endforeach
            
            
        </tbody>
    </table>
    
    </div>
</div>

@endsection