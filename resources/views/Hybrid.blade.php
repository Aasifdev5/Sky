@extends('master')
@section('content')
<section id="section">
      <article class="main">
        <!-- background -->
        <div class="section1">
          <div>
            <img src="images/4.png" alt="bg">
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
                <h1 style="margin-left: 8px;" class="logo_name">ARIMA-ANN</h1>
              </div>

              <div class="text">

                <p>A hybrid model combining Auto-Regressive Integrated Moving Average and Artificial Neural Network,<br>
                  providing accurate euro price forecasting capabilities.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">VAR-MLP</h1>
              </div>

              <div class="text">
                <p>This hybrid model combines Vector Autoregression and Multilayer Perceptron to deliver robust and<br>
                  accurate forecasts for the euro price.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">LSTM-GARCH</h1>
              </div>

              <div class="text">
                <p>Utilizing Long Short-Term Memory and Generalized Autoregressive Conditional Heteroskedasticity,<br>
                  this
                  hybrid model offers precise predictions for euro price fluctuations.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">SVR-ARIMA</h1>
              </div>

              <div class="text">
                <p>By combining Support Vector Regression and Auto-Regressive Integrated Moving Average, this hybrid<br>
                  model provides reliable forecasts for the euro price.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">RF-ANN</h1>
              </div>

              <div class="text">
                <p>A hybrid model that integrates Random Forest and Artificial Neural Network, offering
                  comprehensive<br>
                  forecasting capabilities for the euro price.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 style="margin-left: 8px;" class="logo_name">SARIMA-MLP</h1>
              </div>

              <div class="text">
                <p>This hybrid model combines Seasonal Auto-Regressive Integrated Moving Average and Multilayer<br>
                  Perceptron to deliver accurate euro price forecasts.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseHybrid" class="btn">Purchase now</a>
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