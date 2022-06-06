@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('public/backend/plugins/chartJs/Chart.min.css') }}">

@php $currency = currency(); @endphp


<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Olá Bruno</h5>
                            <p>Plano: VIP</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="avatar-md profile-user-wid ">
                            <img src="{{ profile_picture() }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        
                        
                    </div>

                    <div class="col-sm-8 col-md-10">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6 text-center">
                                    <h5 class="font-size-18">R$ 10.302,00</h5>
                                    <p class="text-muted mb-0">Saldo em conta</p>
<div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Depositar<i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                                </div>
                                <div class="col-6 text-center">
                                    <h5 class="font-size-18">R$ 1.245,00</h5>
                                    <p class="text-muted mb-0">Despesas Junho</p>
<div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Nova Despesa<i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Despesas da Semana</h4>
                <ul class="verti-timeline list-unstyled">

                

                    @foreach($latest_expense as $expense)
                           
                            <li  id="row_{{ $expense->id }}" class="event-list {{ isset($expense->trans_date)== date('d/m/Y') ? 'active' : '' }}" >
                                <div class="event-timeline-dot">
                                    <i class="bx bxs-right-arrow-circle font-size-18 {{ isset($expense->trans_date)== date('d/m/Y') ? 'bx-fade-right' : '' }} "></i>
                                </div>
                            
                                <div class="d-flex">
                                    <div class="me-3">
                                        <h5 class="font-size-14">{{ date('d/m',strtotime($expense->trans_date)) }}<i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                    </div>
                                    <div class="me-3">
                                        <div>
                                            {{ isset($expense->expense_type->name) ? $expense->expense_type->name : _lang('Transfer') }}
                                        </div>
                                        <div>
                                            {{ decimalPlace($expense->amount, $currency) }}
                                        </div>
                                    </div>
                    
                                    <div class="me-3">
                                        <div>
                                            <a href="{{action('ExpenseController@show', $expense['id'])}}"
                                data-title="{{ _lang('View Expense') }}"
                                class="btn btn-light btn-sm ajax-modal">{{ _lang('View Details') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            @endforeach
                    
                </ul>
                <div class="text-center mt-4"><a href="" class="btn btn-primary waves-effect waves-light btn-sm">Ver todas as despesas<i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>
</div>
<div class="row" hidden>
    <div class="col-xl-3 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ _lang('Current Day Income') }}</h5>
                <h6 class="pt-1"><b>{{ decimalPlace($current_day_income, $currency) }}</b></h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ _lang('Current Day Expense') }}</h5>
                <h6 class="pt-1"><b>{{ decimalPlace($current_day_expense, $currency) }}</b></h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ _lang('Monthly Income') }}</h5>
                <h6 class="pt-1"><b>{{ decimalPlace($current_month_income, $currency) }}</b></h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ _lang('Monthly Expense') }}</h5>
                <h6 class="pt-1"><b>{{ decimalPlace($current_month_expense, $currency) }}</b></h6>
            </div>
        </div>
    </div>
</div>

<div class="row" hidden>
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Income vs Expense of')." ".date('Y') }}</h4>
            </div>
            <div class="card-body">
                <canvas id="yearly_income_expense" width="100%" height="25"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row" hidden>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Last 5 Income') }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ _lang('Date') }}</th>
                                <th>{{ _lang('Type') }}</th>
                                <th class="text-right">{{ _lang('Amount') }}</th>
                                <th class="text-center">{{ _lang('Details') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($latest_income as $transaction)
                            <tr id="row_{{ $transaction->id }}">
                                <td class='trans_date'>{{ $transaction->trans_date }}</td>
                                <td class='chart_id'>
                                    {{ isset($transaction->income_type->name) ? $transaction->income_type->name : _lang('Transfer') }}
                                </td>
                                <td class='amount text-right'>{{ decimalPlace($transaction->amount, $currency) }}
                                </td>
                                <td class="text-center">
                                    <a href="{{action('IncomeController@show', $transaction['id'])}}"
                                        data-title="{{ _lang('View Income') }}"
                                        class="btn btn-light btn-sm ajax-modal">{{ _lang('View Details') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Last 5 Expense') }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ _lang('Date') }}</th>
                                <th>{{ _lang('Type') }}</th>
                                <th class="text-right">{{ _lang('Amount') }}</th>
                                <th class="text-center">{{ _lang('Details') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($latest_expense as $expense)
                            <tr id="row_{{ $expense->id }}">
                                <td class='trans_date'>{{ $expense->trans_date }}</td>
                                <td class='chart_id'>
                                    {{ isset($expense->expense_type->name) ? $expense->expense_type->name : _lang('Transfer') }}
                                </td>
                                <td class='amount text-right'>{{ decimalPlace($expense->amount, $currency) }}
                                </td>
                                <td class="text-center">
                                    <a href="{{action('ExpenseController@show', $expense['id'])}}"
                                        data-title="{{ _lang('View Expense') }}"
                                        class="btn btn-light btn-sm ajax-modal">{{ _lang('View Details') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row" hidden>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Income vs Expense of')." ".date('M, Y') }}</h4>
            </div>
            <div class="card-body">
                <canvas id="dn_income_expense" width="100%" height="40"></canvas>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Financial Account Balance') }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{ _lang('A/C') }}</th>
                            <th>{{ _lang('A/C Number') }}</th>
                            <th class="text-right">{{ _lang('Balance') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(get_financial_balance() as $account)
                        <tr id="row_{{ $account->id }}">
                            <td class='account_title'>{{ $account->account_title }}</td>
                            <td class='account_number'>{{ $account->account_number }}</td>
                            <td class='opening_balance text-right'>{{ decimalPlace($account->balance, $currency) }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-script')
<script src="{{ asset('public/backend/plugins/chartJs/Chart.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('public/backend/assets/js/dashboard.js') }}"></script>
@endsection