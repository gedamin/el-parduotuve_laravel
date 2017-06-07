@extends('layouts.admin.seo-post')
@section('content')
    <div class="panel-body">
        <div class="well">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <h3><i class="fa fa-list"></i> Logotipų dizaineriai</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('logotipu-dizaineriai.admin.add') }}" data-toggle="tooltip"
                           class="btn btn-primary" data-original-title="Pridėti"><i class="fa fa-plus"></i> Pridėti</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td style="width: 1px;" class="text-center">ID</td>
                    <td class="text-center">Nuotrauka</td>
                    <td class="text-center">Vardas</td>
                    <td class="text-center">Anraštė</td>
                    <td class="text-center">Trumpas aprašymas</td>
                    <td class="text-center">Telefonas</td>
                    <td class="text-center">El.paštas</td>
                    <td class="text-center">Statusas</td>
                    @if (Auth::check() && Auth::user()->isAdmin() )
                    <td class="text-center">Rūšiavimas</td>
                    @endif
                    <td class="text-center">Data</td>
                    <td class="text-center">Atnaujinta</td>
                    <td class="text-right">Veiksmai</td>
                </tr>
                </thead>
                <tbody>
                @foreach($disainers_lists as $disainer)
                    <tr>
                        <td class="text-center">{{$disainer->id}}</td>
                        <td class="text-center"><img src="/storage/disainer/{{$disainer->disainer_avatar}}" width="70"
                                                     height="auto"></td>
                        <td class="text-center">{{$disainer->disainer_name}}</td>
                        <td class="text-center">{{$disainer->disainer_title}}</td>
                        <td class="text-center">{{$disainer->disainerShort_description}}</td>
                        <td class="text-center">{{$disainer->disainer_phone}}</td>
                        <td class="text-center">{{$disainer->disainer_email}}</td>
                        <td class="text-center">
                            <div>
                                @if(($disainer->is_active_disainer) != 1 )
                                    <span class="color-active">Aktyvuota</span>
                                @else
                                    <span class="color-notActive">Deaktyvuota</span>
                                @endif
                            </div>
                        </td>
                        @if (Auth::check() && Auth::user()->isAdmin() )
                        <td class="text-center">{{$disainer->disainer_sort}}</td>
                        @endif
                        <td class="text-center">{{$disainer->created_at}}</td>
                        <td class="text-center">{{$disainer->updated_at}}</td>
                        <td class="text-right">
                            <p><a href="{{ route('logotipu-dizaineriai.admin.ImgGalleryCRUD', $disainer->id) }}" class="label label-info">Įkelti Logotipus</a></p>
                            <p><a href="{{ url('admin/logotipu-dizaineriai/edit', $disainer->id) }}"
                                  class="label label-warning">Redaguoti</a></p>
                            <p><a href="{{ route('logotipu-kurimas.disainer.view', $disainer->id) }}"
                                  class="label label-success" target="_blank">Peržiūrėti</a></p>
                            <p><a href="{{ url ('/admin/logotipu-dizaineriai/delete',$disainer->id ) }}"
                                  class="label label-danger"
                                  onclick="return confirm('Ar tikrai norite ištrinti?')">Ištrinti</a></p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $disainers_lists->links() }}

        </div>
    </div>
@endsection