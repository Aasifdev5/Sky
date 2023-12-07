@extends('master')
@section('content')
<section id="section">
      <article class="main">
        <!-- background -->
        <div class="section1">
          <div>
            <img src="images/2.png" alt="bg">
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
                <h1 class="logo_name">LSTM (Long Short-Term Memory)</h1>
              </div>

              <div class="text">

                <p>LSTM is a type of recurrent neural network (RNN) that is designed to<br> overcome the vanishing
                  gradient
                  problem. It is commonly used for sequence prediction tasks,<br> such as speech recognition, language
                  modeling, and sentiment analysis.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">GRU (Gated Recurrent Unit)</h1>
              </div>

              <div class="text">
                <p>GRU is another type of recurrent neural network that addresses the vanishing gradient problem.<br> It
                  simplifies the architecture of LSTM by combining the forget and input gates.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">MLP (Multilayer Perceptron)</h1>
              </div>

              <div class="text">
                <p>MLP models, also known as feedforward neural networks, can be used for time series forecasting by<br>
                  taking historical data as input and predicting future values. They are relatively simple models
                  but<br>
                  can still provide accurate predictions in some cases.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Seq2Seq (Sequence-to-Sequence)</h1>
              </div>

              <div class="text">
                <p>Seq2Seq models are trained in a teacher-forcing manner, where during training, the correct output<br>
                  sequence is fed as input to the decoder at each step. The model is optimized to minimize<br> the
                  difference between the predicted output sequence and the target output sequence.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Bayesian Recurrent Neural Network (BRNN)</h1>
              </div>

              <div class="text">
                <p>BRNN is a recurrent neural network model that incorporates Bayesian inference to model and
                  predict<br>
                  the Euro price with uncertainty estimates.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Neural Prophet</h1>
              </div>

              <div class="text">
                <p>Neural Prophet is a deep learning model specifically designed for time series forecasting tasks.<br>
                  It
                  is based on feed-forward neural networks and incorporates several components<br> to capture different
                  aspects of time series data.</p>
                <div class="btns">
                  <a href="#" class="btn">python</a>
                  <a href="PurchaseDeep" class="btn">Purchase now</a>
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
@endsection