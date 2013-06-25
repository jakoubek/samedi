@extends('templates.default')

@section('breadcrumb')
<li><a href="/">Start</a> <span class="divider">/</span></li>
<li class="active">@lang('base.info')</li>
@endsection

@section('pagetitle')
@lang('base.info')
@endsection

@section('content')

<h2>Versionen</h2>

<table class="table">
    <thead>
        <tr>
            <th>@lang('base.info_version_module')</th>
            <th>@lang('base.info_version_version')</th>
            <th>@lang('base.info_version_date')</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Samedi</td>
            <td>{{ Config::get('version.version') }}</td>
            <td>{{ Config::get('version.releasedate') }}</td>
        </tr>
    </tbody>
</table>

<h2>Datenbank</h2>

<table class="table">
    <tbody>
        <tr>
            <td>@lang('base.info_database_path')</td>
            <td>{{ $sysinfo->database_path }}</td>
        </tr>
        <tr>
            <td>@lang('base.info_database_size')</td>
            <td>{{ $sysinfo->database_size }}</td>
        </tr>
    </tbody>
</table>

<table class="table">
    <thead>
        <tr>
            <th>@lang('base.info_table_name')</th>
            <th>@lang('base.info_table_records')</th>
        </tr>
    </thead>
    <tbody>
@foreach ($sysinfo->table_info as $table)
        <tr>
            <td>{{ $table['name'] }}</td>
            <td>{{ $table['number_of_records'] }}</td>
        </tr>
@endforeach
    </tbody>
</table>

@endsection