@extends('templates.default')

@section('breadcrumb')
<li><a href="/">Start</a> <span class="divider">/</span></li>
<li class="active">@lang('Rm.accounts_all')</li>
@endsection

@section('pagetitle')
@lang('Rm.accounts_all')
@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Typ</th>
            <th>Account</th>
        </tr>
    </thead>
    <tbody>
@foreach ($accounts as $account)
        <tr>
            <td>{{ $account->id }}</td>
            <td>{{ $account->type }}</td>
            <td>{{ link_to_action('AccountController@show', $account, $account->id) }}</td>
        </tr>
@endforeach
    </tbody>
</table>

@endsection