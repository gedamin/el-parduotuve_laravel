@extends('layouts.admin.seo-post')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Posts list -->
{{--        @if(!empty($posts))--}}
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Posts List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('SEO-optimizacija.admin.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    <th width="5%">ID</th>
                    <th width="15%">Title</th>
                    <th width="10%">Img</th>
                    <th width="20%">Short content</th>
                    <th width="40%">Content</th>
                    <th width="5%">Created</th>
                    <th width="5%">Author</th>

                    </thead>

                    <!-- Table Body -->

{{--                    @if (Auth::check())--}}  {{--paprastas adminas--}}

                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif

                   @if (Auth::check() && Auth::user()->isAdmin() ) {{--super adminas--}}
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td class="table-text">
                            <div>{{$post->id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->title}}</div>
                        </td>
                        <td class="table-text">
                            <div><img src="/storage/seo_post_img/{{$post->img}}" width="50" height="auto"></div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->short_conten}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->content}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->created}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->author}}</div>
                        </td>
                        <td>
                            <a href="{{ route('SEO-optimizacija.admin.edit', $post->id) }}" class="label label-warning">Edit</a>
                            <a href="{{ route('SEO-optimizacija.admin.delete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    @else
                    <p>Please Login to see list: <a href="{{url('login')}}">LOGIN</a></p>
                    @endif
                </table>
            </div>
        </div>
        {{--@endif--}}
    </div>
</div>
@endsection