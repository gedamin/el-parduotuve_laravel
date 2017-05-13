@extends('layouts.admin.seo-post')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Post <a href="{{ route('SEO-optimizacija.admin.index') }}" class="label label-primary pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form action="{{ route('SEO-optimizacija.admin.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" >img</label>
                            <div class="col-sm-10">
                                <input type="file" name="img" id="img" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" >short_conten</label>
                            <div class="col-sm-10">
                                <textarea name="short_conten" id="short_contenas" class="form-control" value="">{{ $post->short_conten }}</textarea>

                            </div>
                            <script>
                                CKEDITOR.replace( 'short_contenas' );
                            </script>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
                                <script>
                                    CKEDITOR.replace( 'content' );
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >author</label>
                            <div class="col-sm-10">
                                <input type="text" name="author" id="author" class="form-control" value="{{ $post->author }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="Update Post" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection