<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Validator;

class AccountController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $accounts = get_financial_balance();
        return view('backend.accounting.account.list', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if (!$request->ajax()) {
            return view('backend.accounting.account.create');
        } else {
            return view('backend.accounting.account.modal.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'account_title'   => 'required|max:191',
            'opening_date'    => 'required',
            'account_number'  => 'nullable|max:50',
            'opening_balance' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('accounts.create')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $account                  = new Account();
        $account->account_title   = $request->input('account_title');
        $account->opening_date    = $request->input('opening_date');
        $account->account_number  = $request->input('account_number');
        $account->opening_balance = $request->input('opening_balance');
        $account->note            = $request->input('note');

        $account->save();

        //Set Related Data
        $account->opening_date    = date('d M, Y', strtotime($account->opening_date));
        $account->opening_balance = currency() . " " . decimalPlace($account->opening_balance);

        if (!$request->ajax()) {
            return redirect()->route('accounts.index')->with('success', _lang('Saved Sucessfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('Saved Sucessfully'), 'data' => $account]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $account = Account::find($id);
        if (!$request->ajax()) {
            return view('backend.accounting.account.view', compact('account', 'id'));
        } else {
            return view('backend.accounting.account.modal.view', compact('account', 'id'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        $account = Account::find($id);
        if (!$request->ajax()) {
            return view('backend.accounting.account.edit', compact('account', 'id'));
        } else {
            return view('backend.accounting.account.modal.edit', compact('account', 'id'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'account_title'  => 'required|max:191',
            'opening_date'   => 'required',
            'account_number' => 'nullable|max:50',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('accounts.edit', $id)
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $account                 = Account::where("id", $id)->where("company_id", company_id())->first();
        $account->account_title  = $request->input('account_title');
        $account->opening_date   = $request->input('opening_date');
        $account->account_number = $request->input('account_number');
        $account->note           = $request->input('note');

        $account->save();

        //Set Related Data
        $account->opening_date    = date('d M, Y', strtotime($account->opening_date));
        $account->opening_balance = currency() . " " . decimalPlace($account->opening_balance);

        if (!$request->ajax()) {
            return redirect()->route('accounts.index')->with('success', _lang('Updated Sucessfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'update', 'message' => _lang('Updated Sucessfully'), 'data' => $account]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $account = Account::find($id);
        $account->delete();
        return back()->with('success', _lang('Removed Sucessfully'));
    }
}
