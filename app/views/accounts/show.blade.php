@extends('templates.default')

@section('breadcrumb')
<li><a href="/">Start</a> <span class="divider">/</span></li>
<li>{{ link_to_action('AccountController@index', Lang::get('Rm.accounts_all')) }}</a> <span class="divider">/</span></li>
<li class="active">{{ $account }}</li>
@endsection

@section('pagetitle')
@lang('Rm.accounts_all')
@endsection

@section('content')

{{ Form::model($account) }}

{{ Form::label('name1', Lang::get('Rm.account_name1')) }}
{{ Form::text('name1') }}

{{ Form::label('name2', Lang::get('Rm.account_name2')) }}
{{ Form::text('name2') }}

{{ Form::label('name3', Lang::get('Rm.account_name3')) }}
{{ Form::text('name3') }}



{{ Form::close() }}

@endsection