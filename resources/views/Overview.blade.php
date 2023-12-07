@extends('master')
@section('content')
<main>
      <div class="boxing">
        <div class="title">
          <h3>Account Overview</h3>
        </div>
        <div class="links">
          <li><a class="link active" href="Overview"> Account</a></li>
          <li><a class="link" href="Settings">Settings</a></li>
          <li><a class="link" href="Billing"> Billing</a></li>
          <li><a class="link" href="Statements"> Statements</a></li>
        </div>
        <div class="content">
          <form>
            <div class="title">
              <h4 style="padding-top: 10px;"> Profile Detailes</h4>
            </div>
            <div class="user-details">

              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="value" placeholder="Enter First Name" name="Choose_data" required>
              </div>
              <div class="input-box">
                <input type="value" placeholder="Enter Second Name" name="Choose_data" required>
              </div>
              <div class="input-box">
                <span class="details">Contury</span>
                <input type="Valeu" placeholder="Enter Your Contury" name="Choose_data" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter Your Email" name="Choose_data" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="value" placeholder="Enter Your Phone Number" name="Choose_data" required>
              </div>


              <div class="btns">
                <button class="btn">Save</button>
              </div>
          </form>
        </div>
      </div>
    </main>
@endsection