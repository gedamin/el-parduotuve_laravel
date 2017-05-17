@extends('layouts.admin.seo-post')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Posts list -->
{{--        @if(!empty($posts))--}}
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>BLOG įrašų sąrašas</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('SEO-optimizacija.admin.add') }}"> Pridėti BLOG įrašą</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    <th width="3%">ID</th>
                    <th width="20%">pavadinimas</th>
                    <th width="7%">Foto</th>
                    <th width="20%">Trumpas aprašymas</th>
                    <th width="40%">Aprašymas</th>
                    <th width="5%">Data</th>
                    <th width="5%">Autorius</th>
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
                            <div><img src="/storage/seo_post_img/{{$post->img}}" width="70" height="auto"></div>
                        </td>
                        <td class="table-text">
                            <div>{{strip_tags(str_limit($post->short_conten, 125))}} [...]</div>
                        </td>
                        <td class="table-text">
                            <div>{{strip_tags(str_limit($post->content, 325))}} [...]</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->created}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{$post->author}}</div>
                        </td>
                        <td>
                            <a href="{{ route('SEO-optimizacija.comments.list', $post->id) }}" class="label label-info">Komentarai ({{count($post->comments)}})</a>
{{--                            {{dd($post->comments)}};--}}
                            <a href="{{ route('SEO-optimizacija.admin.edit', $post->id) }}" class="label label-warning">Redaguoti</a>
                            <a href="{{ url('SEO-optimizacija',$post->id) }}" class="label label-success" target="_blank">Peržiūrėti</a>
                            <a href="{{ route('SEO-optimizacija.admin.delete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Ištrinti</a>
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