@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('List Article') }} <a href="/articles/create"><button class="btn btn-warning" style="float:right">Add</button></a></div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th style="width: 150px;">Published By</th>
                                <th style="width: 250px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{!!  substr($article->contentdata,0,50) !!}</td>
                                    <td> {{ $article->uid }}</td>
                                    <td>
                                        <a href="/articles/{{ $article->id }}/edit"><button type="button" class="btn btn-primary"> Edit</button></a>
                                        <a href="/articles/{{ $article->id }}/publish"><button type="button" class="btn btn-success"> Publish</button></a>
                                        <button class="btn btn-danger delete" data-id="{{ $article->id }}" data-token="{{ csrf_token() }}" >Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".delete").click(function(){

                var id = $(this).data("id");
                var token = $(this).data("token");
                $.ajax(
                    {
                        url: "articles/"+id,
                        type: 'POST',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_method": 'DELETE',
                            "_token": token
                        },
                        success: function(result){
                           alert(result);
                        }
                    });
            });
        });
    </script>
@endsection
