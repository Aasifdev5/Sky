@extends('master')
@section('content')
<main id="main">
      <div class="boxing">
        <div class="title">
          <h3>Account Overview</h3>
        </div>
        <div class="links">
          <li><a class="link" href="Overview"> Account </a></li>
          <li><a class="link active" href="Settings">Settings</a></li>
          <li><a class="link" href="Billing"> Billing</a></li>
          <li><a class="link" href="Statements"> Statements</a></li>
        </div>
        <div class="content">
          <form>
            <div class="title">
              <h4 style="padding-top: 10px;"> Profile Settings</h4>
            </div>
            <div class="personal-image">
              <label class="label">
                <input type="file" />
                <figure class="personal-figure">
                  <img src="images/profile photo.png" class="personal-avatar" alt="avatar">
                  <figcaption class="personal-figcaption">
                    <img
                      src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                  </figcaption>
                </figure>
              </label>
              <p>PNG, JPG, JPEG</p>
            </div>
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="value" placeholder="Enter First Name" name="First Name" required>
              </div>
              <div class="input-box">
                <input type="value" placeholder="Enter Second Name" name="Second Name" required>
              </div>
              <div class="input-box">
                <span class="details">Contury</span>
                <input type="Valeu" placeholder="Enter Your Contury" name="Contury" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter Your Email" name="Email" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="value" placeholder="Enter Your Phone Number" name="Phone Number" required>
              </div>

              <div class="btns">
                <button class="btn">Save Changes</button>
                <button class="btn">Discard</button>
              </div>
          </form>
        </div>
      </div>

      <hr style="margin-top: 40px;">
      <!-- sign in  -->
      <div class="sign-in">
        <h1 class="sign"> Change Password</h1>
        <a href="#" class="link"><i class='bx bxl-google'></i></a>
        <a href="#" class="link"><i class='bx bxl-facebook-circle'></i></a>
      </div>
      <!-- small form -->
      <div class="small-form">
        <h3>Password</h3>
        <input type="text" id="input1" class="input-field" placeholder="Password">
        <h3>New Password</h3>
        <input type="password" id="input2" class="input-field" placeholder="New Password">
        <h3>Confirm New Password</h3>
        <input type="password" id="input2" class="input-field" placeholder="Confirm New Password">
        <button type="button" id="submitButton" class="submit-button">Save Changes</button>
      </div>

      <!-- remember me -->
      <div class="account">

        <p></p>
      </div>

      <div>
        <h2 class="sign">Deactivate Account</h2>
        <p style="font-size: 14px;">You Are Deactivating Your Account?</p>
        <label for="myCheckbox">
          <input type="checkbox" id="myCheckbox" style="margin: 20px 0;">
          You Are Deactivating Your Account?
        </label>
        <div class="btns">
          <button class="btn">Deactivate account</button>
        </div>
      </div>
      </div>
    </main>
@endsection