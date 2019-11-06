@extends('layouts.dashboard')

@section('content')



<form method="post" class="form-horizontal" action="{{route('articles.update',$article->id)}}">
     @csrf
     @method('PUT')
    <div class="form-group" style="margin-top:20px;"><label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10"><input type="text" class="form-control" name="title" value="{{old('title')? old('title') : $article->title}}"> 
            @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
            @endif   
        </div>
    </div>

     <div class="hr-line-dashed"></div>
    <div class="form-group"><label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10"><textarea style = "height: 300px"  class="form-control" name="content">{{old('content')? old('content') : $article->content}}</textarea> 
            @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content')}}</strong>
            </span>
            @endif   
        </div>
    </div>
     
    


    <div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a href="/home" class="btn btn-white">Cancel</a>
            <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
    </div>
</form>

@endsection









