@extends('master')
@section('content')
<main>
      <div class="welcome">
        <h2>Balance</h2>
      </div>
      <!-- links -->
      <div class="links">
        <li><a class="link active" href="Payment.html">Balance</a></li>
        <li><a class="link" href="AddFunds.html">Add Funds</a></li>
        <li><a class="link" href="WithdrawFunds.html">Withdraw Funds</a></li>
      </div>
      <!-- In Progress orders -->
      <div>
        <div class="display">
          <div class="box-payment">
            <div class="container">
              <h1>Total Balance</h1>
              <p> 1250 $</p>
              <a class="funds-btn" href="AddFunds.html">Add Funds</a>
            </div>
          </div>
        </div>
    </main>
@endsection