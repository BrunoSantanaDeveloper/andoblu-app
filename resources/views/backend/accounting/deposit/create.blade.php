@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('Create New Account') }}</h4>
            </div>

            <div class="card-body">

                <form method="post" class="validate" autocomplete="off" action="{{ route('accounts.store') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12" hidden>
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Account Title') }}</label>
                                        <input type="text" class="form-control" name="account_title"
                                            value="Defalt" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Opening Date') }}</label>
                                        <input type="date" class="form-control " name="opening_date"
                                            value="{{ date() }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12" hidden>
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Account Number') }}</label>
                                        <input type="text" class="form-control" name="account_number"
                                            value="{{ old('account_number') }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="control-label">{{ _lang('Opening Balance')." ".currency() }}</label>
                                        <input type="text" class="form-control money" name="opening_balance"
                                            value="{{ old('opening_balance') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Note') }}</label>
                                        <textarea class="form-control" name="note">{{ old('note') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg"><i class="ti-save"></i> {{ _lang('Save Changes') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection