@extends('master')
@section('content')
<section id="section">
      <article class="main">
        <!-- background -->
        <div class="section1">
          <div>
            <img src="images/3.png" alt="bg">
          </div>
        </div>
        <!-- input and text -->

        </div>
        <div class="section2">
          <div class="box-contain">
            <div class="content">
              <p></p>
              <input type="text" placeholder="Search">
            </div>
            <!-- Box -->
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">ARIMA</h1>
              </div>

              <div class="text">

                <p>A widely used model for time series forecasting that incorporates autoregressive, moving average,<br>
                  and
                  differencing components.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">SARIMA</h1>
              </div>

              <div class="text">
                <p>Seasonal ARIMA model that captures both trend and seasonal patterns in time series data<br> for
                  accurate
                  predictions.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">Prophet</h1>
              </div>

              <div class="text">
                <p>Robust model developed by Facebook for time series forecasting with built-in flexibility<br> and
                  automatic trend detection.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">LSTM</h1>
              </div>

              <div class="text">
                <p>Long Short-Term Memory model, a type of recurrent neural network known for effectively capturing<br>
                  long-term dependencies in sequential data.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">GRU</h1>
              </div>

              <div class="text">
                <p>Gated Recurrent Unit, a variant of LSTM that offers similar benefits, including the ability to
                  model<br>
                  long-range dependencies in time series</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">VAR</h1>
              </div>

              <div class="text">
                <p>Vector Autoregression model used for multivariate time series forecasting, capturing the
                  relationships among<br> multiple variables.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseTime" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <!-- pagination -->
            <div class="pagination">
              <a href="#">&laquo;</a>
              <a class="active" href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
            </div>
      </article>
    </section>
  </section>
@endsection