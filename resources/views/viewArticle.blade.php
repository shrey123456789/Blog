@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if(isset($msg))
                <div class="alert alert-success">
                    <strong>{{ $msg }}!</strong> your Article.
                </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('View Article') }}</div>

                    <div class="card-body">

                        @foreach ($articles as $article)
                           <div class="row">
                               <div class="col-md-12">
                                   <h4>{{ $article->title }}</h4>
                                   <h6 style="color:grey;"><span> {{ $article->updated_at }} </span>| Published By : {{ $article->uid }}</h6>
                                   <p>{!!  $article->content !!}</p>
                               </div>
                           </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
