@extends('master')
@section('title')
Dashboard
@endsection
@section('content')
<main>

<div class="welcome">
  <h2>Welcome, Raheel Khan</h2>
  <small>Here You can track your activity and find suitable services for your request.</small>
</div>
<div class="catagories">
  <h1>Categories</h1>
  <div class="data">
    <h2>Data Forecasting </h2>
    <h2>Data Analysis </h2>
    <h2>Data Forecasting </h2>
    <h2>Data Analysis </h2>
  </div>
</div>

<div class="catagories">
  <h1>Current Task</h1>
  <div class="circle-wrap">
    <div class="circle">
      <div class="mask full-1">
        <div class="fill-1"></div>
      </div>
      <div class="mask half">
        <div class="fill-1"></div>
      </div>
      <div class="inside-circle"> 79% </div>
    </div>
  </div>
</div>
<!-- box contain data -->

<div class="display">
  <div class="activity">
    <div class="activity-data">
      <div class="data names">
        <span style="color: #707EAE;" class="data-list">CNN Model</span>
        <span style="color: #707EAE;" class="data-list">Game Analysis</span>
        <span style="color: #707EAE;" class="data-list data1">Bi_Lstm</span>
      </div>
      <div class="data type">
        <span class="data-list" style="color: #00DEA3;">In Progress</span>
        <span class="data-list" style="color: #868CFF;">On hold</span>
        <span class="data-list data1" style="color: #00DEA3;">Completed</span>
      </div>
      <div class="data status">
        <span style="color: #707EAE;" class="data-list">09:01:12 AM</span>
        <span style="color: #707EAE;" class="data-list">09:15:31 AM</span>
        <span style="color: #707EAE;" class="data-list data1">10:45:16 AM</span>
      </div>
    </div>

  </div>

  <div class="catagories">
    <h1>Recent Orders</h1>
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
        <span class="data-title">Time</span>
        <span style="color: #707EAE;" class="data-list">09:01:12 AM</span>
        <span style="color: #707EAE;" class="data-list">09:15:31 AM</span>
        <span style="color: #707EAE;" class="data-list">10:45:16 AM</span>
      </div>
      <div class="data joined">
        <span class="data-title">Price</span>
        <span style="color: #707EAE;" class="data-list">1545,00</span>
        <span style="color: #707EAE;" class="data-list">5649,00</span>
        <span style="color: #707EAE;" class="data-list">4547,00</span>

      </div>
      <div class="data type">
        <span class="data-title">Status</span>
        <span class="data-list" style="color: #00DEA3;">Completed</span>
        <span class="data-list" style="color: #868CFF;">Painding</span>
        <span class="data-list" style="color: #00DEA3;">Completed</span>

      </div>

    </div>
  </div>
</div>
</main>
@endsection