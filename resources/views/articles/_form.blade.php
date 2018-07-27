<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

    <input type="hidden" name="id" value="{{ isset($article) ? $article->id : '0' }}">

    <label for="name" class="col-md-4 control-label">Title</label>

    <div class="col-md-12">
        <input id="name" type="text" class="form-control" name="title" value="{{ isset($article) ? $article->title : old('title') }}" required autofocus>

        @if ($errors->has('title'))
            <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">Content</label>

    <div class="col-md-12">
        <textarea id="content" type="text" class="form-control ckeditor" name="contentdata" required>{{ isset($article) ? $article->contentdata : old('contentdata') }}</textarea>

        @if ($errors->has('content'))
            <span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>