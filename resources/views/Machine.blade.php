@extends('master')
@section('content')
<section id="section">
      <article class="main">
        <!-- background -->
        <div class="section1">
          <div>
            <img src="images/1.png" alt="bg">
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
                <h1 class="logo_name">Linear Regression</h1>
              </div>

              <div class="text">
                <p>Linear Regression: A simple but powerful model for regression analysis that finds the best-fit<br>
                  linear
                  relationship between input variables and a target variable.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Decision Trees</h1>
              </div>

              <div class="text">
                <p>A classification model that predicts the probability of an instance<br> belonging to a particular
                  class
                  using a logistic function.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Logistic Regression</h1>
              </div>

              <div class="text">
                <p>Tree-based models that make decisions by splitting data based on features, <br>resulting in a
                  hierarchical structure.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Random Forests</h1>
              </div>

              <div class="text">
                <p>Ensemble learning method that combines multiple decision trees<br> to make predictions, often
                  resulting
                  in improved accuracy and<br> generalization.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Gradient Boosting Machines (GBMs)</h1>
              </div>

              <div class="text">
                <p>An ensemble learning technique that builds a strong predictive model by iteratively<br> combining
                  weak
                  models, such as decision trees.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Support Vector Machines (SVMs)</h1>
              </div>

              <div class="text">
                <p>A popular classification model that finds an optimal hyperplane to separate data points<br> belonging
                  to
                  different classes with the largest margin.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachine" class="btn">Purchase now</a>
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
          </div>
        </div>
      </article>
    </section>
@endsection