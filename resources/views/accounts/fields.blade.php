<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Credit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_credit', 'Total Credit:') !!}
    {!! Form::number('total_credit', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Debit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_debit', 'Total Debit:') !!}
    {!! Form::number('total_debit', null, ['class' => 'form-control']) !!}
</div>

<!-- Withdrawl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdrawl', 'Withdrawl:') !!}
    {!! Form::text('withdrawl', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_email', 'Payment Email:') !!}
    {!! Form::text('payment_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Branch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    {!! Form::text('bank_branch', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
</div>

<!-- Applied For Layout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('applied_for_layout', 'Applied For Layout:') !!}
    {!! Form::number('applied_for_layout', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid', 'Paid:') !!}
    {!! Form::number('paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Date Applied Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
    {!! Form::date('last_date_applied', null, ['class' => 'form-control','id'=>'last_date_applied']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#last_date_applied').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Last Date Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
    {!! Form::date('last_date_paid', null, ['class' => 'form-control','id'=>'last_date_paid']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#last_date_paid').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Other Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('other_details', 'Other Details:') !!}
    {!! Form::textarea('other_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('accounts.index') }}" class="btn btn-default">Cancel</a>
</div>
