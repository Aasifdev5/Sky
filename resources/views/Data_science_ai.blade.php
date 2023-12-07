@extends('master')
@section('content')
<section id="section">
      <article class="main">
        <!-- background -->
        <div class="section1">
          <div>
            <img src="images/8.png" alt="bg">
          </div>
        </div>
        <!-- input and text -->
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
                <h1 class="logo_name">Machine Learning Project</h1>
              </div>

              <div class="text">
                <p>Our machine learning project leverages advanced algorithms to analyze vast<br> amounts of data,
                  uncover
                  valuable insights, and make intelligent predictions, <br>revolutionizing decision-making and driving
                  innovation.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseMachineProject.html" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">Deep Learning Project</h1>
              </div>

              <div class="text">
                <p>Our deep learning project employs sophisticated neural networks to model complex patterns and
                  solve<br>
                  intricate problems, unlocking breakthrough advancements and pushing <br>the boundaries of artificial
                  intelligence.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseDeepProject.html" class="btn">Purchase now</a>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="logo-name">
                <img src="images/logo.png" alt="">
                <h1 class="logo_name">AI application Development</h1>
              </div>

              <div class="text">
                <p>Our AI application development focuses on harnessing the power of<br> artificial intelligence to
                  create
                  intelligent, efficient, and intuitive solutions<br> that streamline processes, optimize performance,
                  and
                  drive transformative outcomes.</p>
                <div class="btns">
                  <a href="" class="btn">python</a>
                  <a href="PurchaseAIapplication.html" class="btn">Purchase now</a>
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
  </section>
@endsection