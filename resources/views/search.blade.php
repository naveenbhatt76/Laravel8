
@extends('master')
@section('content')
<style>

</style>
<div class=" custom-product">
    <div class="trending-wraper">
            <h3>Result for Search Product</h3>
            @foreach($data as $item)
            <div class="item trending-item">
            <a href="/detail/{{$item['id']}}">
                <img class="trending-img" src="{{$item['gallery']}}" alt="Chania">
                <div class="">
                    <h3>{{$item['device']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
            </a>
                </div>
            @endforeach
        
            </div>
    </div>
</div>
@endsection