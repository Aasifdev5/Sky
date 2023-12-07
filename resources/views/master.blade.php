<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <title>@yield('title')</title>
</head>

<body>

  <!-- SIDEBAR -->
  <header id="sidebar">
    <div class="boxside">
      <img src="images/profile photo.png" alt="ahmed">
      <h4>Ahmed Mahmoud</h4>
      <p>ID:11848233</p>
    </div>

    <ul class="side-menu">
      <li style="padding-top: 25px;"><a class="link {{ request()->is('dashboard') ? 'activee':'' }}" href="dashboard"><i class='bx bxs-dashboard icon'></i> My
          Dashboard</a>
      </li>
      <li><a class="link {{ request()->is('Overview') ? 'activee':'' }}" href="Overview"><i class='bx bxs-user-account icon'></i> My Account</a>
      </li>
      <li><a class="link {{ request()->is('Settings') ? 'activee':'' }}" href="Settings"><i class='bx bxs-cog'></i> Settings</a></li>
      <li><a class="link {{ request()->is('Payment') ? 'activee':'' }}" href="Payment"><i class="fa-solid fa-dollar-sign"></i> Payment </a></li>
      <li><a class="link {{ request()->is('Billing') ? 'activee':'' }}" href="Billing"><i class="fa-solid fa-file-invoice-dollar"></i> Billing</a></li>
      <li style="padding-bottom: 25px;"> <a class="link {{ request()->is('Statements') ? 'activee':'' }}" href="Statements"><i class="fa-solid fa-file-invoice"></i>
          Statements</a></li>

      <li>
        <a style="background-color:rgb(220, 40, 40) ;" href="#"><i class='bx bxs-notepad icon'></i> Data forecasting <i
            class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a class="link {{ request()->is('Machine') ? 'activee':'' }}" href="Machine"> <img src="images/icons/machine.png" alt="Machine">Machine
              learning</a></li>
          <li><a class="link {{ request()->is('Deep') ? 'activee':'' }}" href="Deep"> <img src="images/icons/deep learning.png" alt="Deep"></i>Deep
              learning</a></li>
          <li><a class="link {{ request()->is('TimeSeries') ? 'activee':'' }}" href="TimeSeries"> <img src="images/icons//time.png" alt="Time">Time Series</a></li>
          <li><a class="link {{ request()->is('Hybrid') ? 'activee':'' }}" href="Hybrid"> <img src="images/icons/hybrid.png" alt="Hybrid"></i>Hybrid</a></li>
        </ul>
      </li>
      <li>
        <a style="background-color:rgb(220, 40, 40) ;" href="#"><i class='bx bxs-notepad icon'></i> Data analysis <i
            class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a class="link {{ request()->is('DataAnalysis') ? 'activee':'' }}" href="DataAnalysis"><img src="images/icons/data analysis.png" alt="Analysis">Data
              Analysis</a></li>
          <li><a class="link {{ request()->is('DataVisualization') ? 'activee':'' }}" href="DataVisualization"><img src="images/icons/visual.png" alt="Visualization">Data
              Visualization</a>
          </li>
        </ul>
      </li>


      <li>
        <a style="background-color:rgb(220, 40, 40) ;" href="#"><i class='bx bxs-notepad icon'></i> Data Visualization
          <i class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a class="link {{ request()->is('ExcelVisualization') ? 'activee':'' }}" href="ExcelVisualization"><img src="images/icons/excel.png" alt="Power">Excel
              Visualization</a></li>
          <li><a class="link {{ request()->is('PowerBi') ? 'activee':'' }}" href="PowerBi"><img src="images/icons/power.png" alt="Power">Power Bi
              Visualization</a></li>
        </ul>
      </li>


      <li>
        <a style="background-color:rgb(220, 40, 40) ;" href="#"><i class='bx bxs-notepad icon'></i> Diseases prediction
          <i class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a class="link  {{ request()->is('DiseasesPrediction') ? 'activee':'' }}" href="DiseasesPrediction"><img src="images/icons/diseases prediction.png"
                alt="Diseases">Diseases
              Prediction</a>
          </li>
        </ul>
      </li>
      <li>
        <a style="background-color:rgb(220, 40, 40) ;" href="#"><i class='bx bxs-notepad icon'></i> Data science & ai
          <i class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a class="link  {{ request()->is('Data_science_ai') ? 'activee':'' }}" href="Data_science_ai"><img src="images/icons/ai.png" alt="Diseases">Data science
              projects</a>
          </li>
        </ul>
      </li>
      <hr style="margin-top: 20px;">

      <li><a style="margin-top: 20px;" class="link" href="Orders"><i class="fa-solid fa-circle-chevron-down"></i>
          Orders</a>
      </li>
      <li><a class="link  {{ request()->is('ActivityOrder') ? 'activee':'' }}" href="ActivityOrder"><i class="fa-solid fa-bell"></i> Order Activity </a></li>
      <li><a class="link" href="#"><i class="fa-solid fa-envelope"></i></i> Message </a></li>
      <li><a class="link" href="#"><i class='bx bx-help-circle'></i> Help</a></li>
      <li><a class="link" href="https://skyforecasting.net/"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a></li>

    </ul>
  </header>
  <!-- SIDEBAR -->

  <!-- NAVBAR -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <div>
        <h1>Sky Forecasting</h1>
      </div>
      <form action="#">
        <div class="form-group">
          <input type="text" placeholder="Search">
        </div>
      </form>
      </div>
      <div id="respose">
        <i style="color: #FC3B56;" id="menubar" class="fas fa-bars"></i>
      </div>

    </nav>
    <!-- NAVBAR -->
    <!-- MAIN -->
    @yield('content')
    <!-- MAIN -->
  </section>
  <!-- NAVBAR -->

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/script.js"></script>
</body>

</html>