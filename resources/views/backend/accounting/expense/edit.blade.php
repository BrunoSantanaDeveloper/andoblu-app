@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header header-title">{{ _lang('Update Expense') }}</div>

            <div class="card-body">
                <form method="post" class="validate" autocomplete="off"
                    action="{{ action('ExpenseController@update', $id) }}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Date') }}</label>
                                <input type="date" class="form-control " name="trans_date"
                                    value="{{ $transaction->getRawOriginal('trans_date') }}" required>
                            </div>
                        </div>

                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <a href="{{ route('accounts.create') }}" data-reload="false"
                                    data-title="{{ _lang('Create Account') }}" class="ajax-modal-2 select2-add"><i
                                        class="ti-plus"></i> {{ _lang('Add New') }}</a>
                                <label class="control-label">{{ _lang('Account') }}</label>
                                <select class="form-control select2-ajax" data-value="id" data-display="account_title"
                                    data-table="accounts" data-where="1" name="account_id" required>
                                    <option value="">{{ _lang('Select One') }}</option>
                                    <option value="1" selected></option>
                                    {{ create_option("accounts","id","account_title",$transaction->account_id,array("company_id="=>company_id())) }}
                                </select>
                            </div>
                        </div>

                        

                        <div class="col-md-6" >
                            <div class="form-group">
                                <a href="{{ route('chart_of_accounts.create') }}" data-reload="false"
                                    data-title="{{ _lang('Add Income/Expense Type') }}"
                                    class="ajax-modal-2 select2-add"><i class="ti-plus"></i> {{ _lang('Add New') }}</a>
                                <label class="control-label">{{ _lang('Expense Type') }}</label>
                                <select class="form-control select2-ajax" data-value="id" data-display="name"
                                    data-table="chart_of_accounts" data-where="4" name="chart_id" required>
                                    <option value="">{{ _lang('Select One') }}</option>
                                    {{ create_option("chart_of_accounts","id","name",$transaction->chart_id,array("type="=>"expense","AND company_id="=>company_id())) }}
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Amount')." ".currency() }}</label>
                                <input type="text" class="form-control money" name="amount"
                                    value="{{ $transaction->amount }}" required>
                            </div>
                        </div>

                       

                        <div class="col-md-6">
                            <div class="form-group">
                                <a href="{{ route('contacts.create') }}" data-reload="false"
                                    data-title="{{ _lang('Add Client') }}" class="ajax-modal-2 select2-add"><i
                                        class="ti-plus"></i> {{ _lang('Add New') }}</a>
                                <label class="control-label">{{ _lang('Payee') }}</label>
                                <select class="form-control select2-ajax" data-value="id" data-display="contact_name"
                                    data-table="contacts" data-where="1" name="payer_payee_id">
                                    <option value="">{{ _lang('Select One') }}</option>
                                    {{ create_option("contacts","id","contact_name",$transaction->payer_payee_id,array("company_id="=>company_id())) }}
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6" hidden>
                            <div class="form-group">
                                <a href="{{ route('payment_methods.create') }}" data-reload="false"
                                    data-title="{{ _lang('Add Payment Method') }}" class="ajax-modal-2 select2-add"><i
                                        class="ti-plus"></i> {{ _lang('Add New') }}</a>
                                <label class="control-label">{{ _lang('Payment Method') }}</label>
                                <select class="form-control select2-ajax" data-value="id" data-display="name"
                                    data-table="payment_methods" data-where="1" name="payment_method_id" required>
                                    <option value="">{{ _lang('Select One') }}</option>
                                    {{ create_option("payment_methods","id","name",$transaction->payment_method_id,array("company_id="=>company_id())) }}
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Reference') }}</label>
                                <input type="text" class="form-control" name="reference"
                                    value="{{ $transaction->reference }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Attachment') }}</label>
                                <input type="file" class="form-control "
                                    data-value="{{ $transaction->attachment}}" name="attachment">
                                    <div><a target="_BLANK" href="{{ url('public/uploads/transactions/'.$transaction->attachment) }}" > {{ $transaction->attachment}} </a></div>
                            </div>
                        </div>

                        <div class="col-md-6 clear">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Note') }}</label>
                                <textarea class="form-control" name="note">{{ $transaction->note }}</textarea>
                               
                            </div>
                        </div>
                        <div class="col-md-6 clear">
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked="">
                                                <label class="form-check-label" for="SwitchCheckSizelg">Large Size Switch</label>
                                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="ti-save"></i>
                                    {{ _lang('Save Changes') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection