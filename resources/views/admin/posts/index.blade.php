@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">{{ __('Lista Posts') }}</div>

                    <div class="card-body">
                        @foreach ($posts as $post)
                            <ul>
                                <li>{{$post->title}}</li>
                            </ul>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection