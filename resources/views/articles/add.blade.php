@extends('layouts.app')
@section('head')
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add Article')  }}</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="/articles">
                            {{ csrf_field() }}
                            @include('articles._form')
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
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