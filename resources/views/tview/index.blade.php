@extends('layouts.app')

@section('content')


<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <table class="table table-bordered table-striped {{ count($uploads) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        {{-- <th style="text-align:center;"><input type="checkbox" id="select-all" /></th> --}}
                        <th><center><h3><bold>Trivia/Facts</bold></h3></center></th>
                        {{-- <th>&nbsp;</th> --}}
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($uploads) > 0)
                        @foreach ($uploads as $upload)
                            <tr>
                                {{-- <td></td> --}}
                                <td style="padding: 50px"><h4>{{ $upload->description }}</h4></td>
                              
                                    {{-- <a href="{{ route('uploads.show',[$upload->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a> --}}
                                    {{-- <a href="{{ route('uploads.edit',[$upload->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a> --}}
                                    {{-- {!! Form::open(array( --}}
                                   {{-- /     'style' => 'display: inline-block;', --}}
                                        {{-- 'method' => 'DELETE', --}}
                                       {{-- / 'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');", --}}
                                        {{-- 'route' => ['uploads.destroy', $upload->id])) !!} --}}
                                    {{-- {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!} --}}
                                    {{-- {!! Form::close() !!} --}}
                              
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            {{-- <td colspan="3"></td> --}}
                        </tr>
                    @endif
                </tbody>
            </table>
			</div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        // window.route_mass_crud_entries_destroy = '{{ route('uploads.mass_destroy') }}';
    </script>
@endsection
