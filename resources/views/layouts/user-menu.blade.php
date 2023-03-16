<ul>
    <li class="{{ request()->is('/user/dashboard') ? 'active' : '' }}">
        <a href="{{ route('user.dashboard')}}">
            <img src="{{ asset('assets/images/icon/dashboard.png') }}" alt="Dashboard">
            <span>Dashboard</span>
        </a>
    </li>

    <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a href="{{ route('user.paytransaction')}}">
            <img src="{{ asset('assets/images/icon/pay.png') }}" alt="Pay">
            <span>Debit</span>
        </a>
    </li>
    <li class="{{ request()->is('/user/my-accounts') ? 'active' : '' }}">
        <a href="{{ route('user.myaccounts')}}">
            <img src="{{ asset('assets/images/icon/pay.png') }}" alt="Pay">
            <span>My Accounts</span>
        </a>
    </li>
    <li>
        <a href="{{ route('user.alltransactionaccounts')}}">
            <img src="{{ asset('assets/images/icon/receive.png') }}" alt="Receive">
            <span>Transactions</span>
        </a>
    </li>
    <li>
        <a href="{{ route('user.posts')}}">
            <img src="{{ asset('assets/images/icon/receive.png') }}" alt="Receive">
            <span>Posts</span>
        </a>
    </li>
    <li>
        <a href="{{ route('user.pendingtransactions')}}">
            <img src="{{ asset('assets/images/icon/exchange.png') }}" alt="Exchange">
            <span>Pending Transactions</span>
        </a>
    </li>
    <li>
        <a href="{{ route('user.myrecipients')}}">
            <img src="{{ asset('assets/images/icon/recipients.png') }}" alt="Recipients">
            <span>Recipients</span>
        </a>
    </li>

</ul>
