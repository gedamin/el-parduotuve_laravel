@extends('layouts.admin.seo-post')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Komentarų sąrašas</h2>
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
                        <th width="15%">Autorius</th>
                        <th width="15%">El. paštas</th>
                        <th width="15%">Blog įrašo pavadinimas</th>
                        <th width="40%">Komentaras</th>
                        <th width="15%">Data</th>
                        <th width="10%">Aktyvuoti</th>
                        </thead>

                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        @if (Auth::check() && Auth::user()->isAdmin() )
                        <tbody>

                        @foreach($comments as $comment)
                            <tr>
                                <td class="table-text">
                                    <div>{{$comment->id}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$comment->comment_author}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$comment->email}}</div>
                                </td>
                                <td class="table-text">
                                    <div>

{{--                                        {{$comment->title}}--}}

{{--                                        {{$comment->seopost->title}}--}}
{{--{{dd($comment->seopost)}}--}}






                                    </div>
                                </td>
                                <td class="table-text">
                                    <div>{{$comment->seo_post_comment}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$comment->comment_created}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$comment->is_active_comment}}</div>
                                </td>
                                <td>
                                    <a href="{{ route('SEO-optimizacija.comment.delete', $comment->id) }}" class="label label-danger" onclick="return confirm('Ar tikrai norite ištrinti?')">Ištrinti</a>

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
        </div>
    </div>
@endsection