@extends('layouts.app')
@section('head')
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Edit Article') }}</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="/articles/{{$article->id}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PATCH">
                            @include('articles._form')
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'content',
                {
                    customConfig : 'config.js',
                    toolbar : 'simple'
                })
        });
    </script>
@endsection