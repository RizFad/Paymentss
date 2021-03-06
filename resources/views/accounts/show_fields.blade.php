<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $account->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $account->user_id }}</p>
</div>

<!-- Balance Field -->
<div class="form-group">
    {!! Form::label('balance', 'Balance:') !!}
    <p>{{ $account->balance }}</p>
</div>

<!-- Total Credit Field -->
<div class="form-group">
    {!! Form::label('total_credit', 'Total Credit:') !!}
    <p>{{ $account->total_credit }}</p>
</div>

<!-- Total Debit Field -->
<div class="form-group">
    {!! Form::label('total_debit', 'Total Debit:') !!}
    <p>{{ $account->total_debit }}</p>
</div>

<!-- Withdrawl Field -->
<div class="form-group">
    {!! Form::label('withdrawl', 'Withdrawal Method:') !!}
    <p>{{ $account->withdrawl }}</p>
</div>

<!-- Payment Email Field -->
<div class="form-group">
    {!! Form::label('payment_email', 'Payment Email:') !!}
    <p>{{ $account->payment_email }}</p>
</div>

<!-- Bank Name Field -->
<div class="form-group">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    <p>{{ $account->bank_name }}</p>
</div>

<!-- Bank Branch Field -->
<div class="form-group">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    <p>{{ $account->bank_branch }}</p>
</div>

<!-- Bank Account Field -->
<div class="form-group">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    <p>{{ $account->bank_account }}</p>
</div>

<!-- Applied For Layout Field -->
<div class="form-group">
    {!! Form::label('applied_for_layout', 'Applied For Layout:') !!}
    <p>{{ $account->applied_for_layout }}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $account->paid }}</p>
</div>

<!-- Last Date Applied Field -->
<div class="form-group">
    {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
    <p>{{ $account->last_date_applied }}</p>
</div>

<!-- Last Date Paid Field -->
<div class="form-group">
    {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
    <p>{{ $account->last_date_paid }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $account->country }}</p>
</div>

<!-- Other Details Field -->
<div class="form-group">
    {!! Form::label('other_details', 'Other Details:') !!}
    <p>{{ $account->other_details }}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{{ $account->deleted_at }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $account->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $account->updated_at }}</p>
</div>

