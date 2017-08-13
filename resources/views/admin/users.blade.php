@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body">
        <div class="well">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <h3><i class="fa fa-list"></i> VARTOTOJŲ sąrašas</h3>
                    </div>
                    {{--<div class="pull-right">--}}
                        {{--<a href="{{ route('SEO-optimizacija.admin.add') }}" data-toggle="tooltip"--}}
                           {{--class="btn btn-primary" data-original-title="Pridėti"><i class="fa fa-plus"></i> Pridėti</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td style="width: 1px;" class="text-center">ID</td>
                    <td class="text-center">Vardas</td>
                    <td class="text-center">El.paštas</td>
                    <td class="text-center">isAdmin</td>
                    <td class="text-center">Data</td>

                </tr>
                </thead>
                @if (Auth::check() && Auth::user()->isAdmin() )
                    <tbody>
{{--                    {{dd($users)}}--}}

                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{$user->id}}</td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">
                            {{$user->isAdmin}}
                                {{--<div><img src="/images/seo_post_img/{{$post->img}}" width="70" height="auto"></div>--}}
                            </td>
                            <td class="text-center">{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>
{{--            {{ $users->links() }}--}}
        </div>
    </div>
@endsection
