<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Qrcode</th>
                <th>Pembeli</th>
                <th>Metode Pembayaran</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>
                    <a href="{!! route('transactions.show', [$transaction->id]) !!}">
                        {!! $transaction->qrcode['product_name'] !!}
                    </a>
                </td>
                <td>{!! $transaction->user['name'] !!}</td>
                <td>{!! $transaction->payment_method !!}</td>
                <td>${!! $transaction->amount !!}</td>
                <td>{!! $transaction->status !!}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
