@extends('admin.layouts.admin-base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Lista delle categorie</h1>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item">{{$category->name}}</li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
@endsection