@extends('admin.layouts.admin')



@section('content')
    <div class="row">
            <div class="col-12 col-md-8">
                    @section('title', "Patient Management")
                    </div>
            <div class="col-8 col-md-4" style="padding-bottom: 15px;">
                    <div class="topicbar">
                        <a href="{{ route('admin.diagnosis.index') }}" class="btn btn-primary"> Diagnosis Card</a>
                    </div>
                    <div class="right-searchbar">
                        <!-- Search form -->
                        <form class="form-inline active-cyan-3">
                            <input class="form-control form-control-sm ml-3 w-100" type="text" placeholder="Search" aria-label="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </form>
                    </div>
                </div>
        {{-- <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                {{-- <th>@sortablelink('email', __('views.admin.users.index.table_header_0'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('name',  __('views.admin.users.index.table_header_1'),['page' => $users->currentPage()])</th>
                <th>{{ __('views.admin.users.index.table_header_2') }}</th>
                <th>@sortablelink('active', __('views.admin.users.index.table_header_3'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('confirmed', __('views.admin.users.index.table_header_4'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.users.index.table_header_5'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.users.index.table_header_6'),['page' => $users->currentPage()])</th> --}}
                {{-- <th>Actions</th> --}}
            </tr>
            </thead>
            <tbody>
            {{-- @foreach($users as $user) --}}
                <tr>
                        {{-- $user->email --}}
                    {{-- <td>Hello Patient</td> --}}
                    {{-- <td>{{ $user->name }}</td>
                    <td>{{ $user->roles->pluck('name')->implode(',') }}</td>
                    <td>
                        @if($user->active)
                            <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                        @endif
                    </td>
                    <td>
                        @if($user->confirmed)
                            <span class="label label-success">{{ __('views.admin.users.index.confirmed') }}</span>
                        @else
                            <span class="label label-warning">{{ __('views.admin.users.index.not_confirmed') }}</span>
                        @endif</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', [$user->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', [$user->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        {{--@if(!$user->hasRole('administrator'))--}}
                            {{--<button class="btn btn-xs btn-danger user_destroy"--}}
                                    {{--data-url="{{ route('admin.users.destroy', [$user->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">--}}
                                {{--<i class="fa fa-trash"></i>--}}
                            {{--</button>--}}
                        {{--@endif--}}
                    </td>
                </tr> 
            {{-- @endforeach --}}
            </tbody>
        </table> 
        
        <div class="pull-right">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
@endsection