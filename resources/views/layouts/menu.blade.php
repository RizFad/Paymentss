{{-- All Users --}}
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

<li class="{{ Request::is('accountHistories*') ? 'active' : '' }}">
    <a href="{{ route('accountHistories.index') }}"><i class="fa fa-edit"></i><span>Account Histories</span></a>
</li>

<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{{ route('qrcodes.index') }}"><i class="fa fa-edit"></i><span>Qrcodes</span></a>
</li>

{{-- Teknisi --}}
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>


