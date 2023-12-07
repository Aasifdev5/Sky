@extends('master')
@section('content')
<main>
      <div class="boxing">
        <div class="title">
          <h3>Account Overview</h3>
        </div>
        <div class="links">
          <li><a class="link" href="Overview"> Account </a></li>
          <li><a class="link" href="Settings">Settings</a></li>
          <li><a class="link" href="Billing"> Billing</a></li>
          <li><a class="link active" href="Statements"> Statements</a></li>
        </div>
        <div class="catagories">
          <h2>Statements</h2>
        </div>
        <div class="activity">
          <div class="activity-data">
            <div class="data names">
              <span class="data-title">Product Name</span>
              <span style="color: #707EAE;" class="data-list">CNN Model</span>
              <span style="color: #707EAE;" class="data-list">Game Analysis</span>
              <span style="color: #707EAE;" class="data-list">Bi_Lstm</span>

            </div>
            <div class="data email">
              <span class="data-title">Date</span>
              <span style="color: #707EAE;" class="data-list">1 Nov 2023</span>
              <span style="color: #707EAE;" class="data-list">2 June 2023 </span>
              <span style="color: #707EAE;" class="data-list">23 June 2023</span>
            </div>
            <div class="data joined">
              <span class="data-title">Amount</span>
              <span style="color: #707EAE;" class="data-list">1545,00</span>
              <span style="color: #707EAE;" class="data-list">5649,00</span>
              <span style="color: #707EAE;" class="data-list">4547,00</span>

            </div>
            <div class="data type">
              <span class="data-title">Status</span>
              <span class="data-list">Download</span>
              <span class="data-list">Download</span>
              <span class="data-list">Download</span>

            </div>

          </div>
        </div>
      </div>
    </main>
@endsection