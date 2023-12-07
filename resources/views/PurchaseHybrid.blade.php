@extends('master')

@section('content')
<section id="section">
      <article class="Purchase Purchasefont">
        <h1>Autoregressive Integrated Moving Average Model with an Artificial Neural Network Model
        </h1>
        <!-- background -->
        <div class="Purchasebg">
          <img src="images/1.6.png" alt="bg">
        </div>

        <div class="content Purchasesection ">
          <form>
            <div class="title">
              <h4 style="font-weight: bold;"> Product Information</h4>
            </div>
            <div class="user-details">
              <div class="input-box">
                <span class=" Material">Type of Project</span>
                <input type="value" placeholder="Enter Type of Project" name="Choose_data" required>
              </div>
              <div class="input-box">
                <span class=" Material">Subject of Project</span>
                <input type="Valeu" placeholder=" Enter Subject of Project" name="Choose_data" required>
              </div>
              <div class="input-box">
                <span class=" Material">Project Details</span>
                <textarea name="Project Details" rows="6" cols="50" placeholder="Enter Project Details"></textarea>
              </div>
              <span class="details Material">Material</span>
              <div class="uploader" id="uploader">
                <div class="drop-area" id="dropArea">
                  <p>drag and drop files <span> Browse files</span></p>
                  <p class="Material">Maximium file size 100 MB</p>
                  <input type="file" id="fileInput">
                </div>
              </div>
          </form>

        </div>
      </article>
      <!-- Package Pricing -->
      <article class="heading-table">
        <div class="head">
          <h4> Project Packages
          </h4>
        </div>
        <div class="mainbox container-fluid mt-lg-2">
          <div class="row">
            <div class="table-responsive-md">
              <table class="table caption-top">
                <thead style="border-bottom: 3px solid #000;">
                  <tr>
                    <th scope="col">Packages</th>
                    <th scope="col" value="100">100$
                      Basic</th>
                    <th scope="col" value="140">140$
                      Standard</th>
                    <th scope="col" value="200">200$
                      Premium</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Software</th>
                    <td>Python-Jupiter
                      notebook</td>
                    <td>Python-Jupiter
                      notebook</td>
                    <td>Python-Jupiter
                      notebook</td>
                  </tr>
                  <tr>
                    <th scope="row">Questions Writing</th>
                    <td>5 Queations*</td>
                    <td>10 Queations*</td>
                    <td>15 Queations*</td>
                  </tr>
                  <tr>
                    <th scope="row">Number of words</th>
                    <td>2000 Words**</td>
                    <td>5000 Words**</td>
                    <td>8000 Words**</td>
                  </tr>
                  <tr>
                    <th scope="row">Number of Pages</th>
                    <td>6 Pages</td>
                    <td>15 Pages</td>
                    <td>24 Pages</td>
                  </tr>
                  <tr>
                    <th scope="row">Topic Research</th>
                    <td><i class="bx bx-x"></i></td>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Plagiarism Check</th>
                    <td><i class="bx bx-x"></i></td>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Visualize Result</th>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Source Code</th>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Build a Documented
                      Baseline Model</th>
                    <td><i class="bx bx-x"></i></td>
                    <td><i class="bx bx-check"></i></td>
                    <td><i class="bx bx-check"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">Add Second Model</th>
                    <td>
                      <select class="form-select form-select-md w-75 first_col" id="model_1"
                        onchange="cal('total_1', 'first_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60" id="t_1">Time Series (60 )</option>
                        <option value="80" id="t_1">Machine Learning (80 )</option>
                        <option value="100" id="t_1">Deep Learning (100 )</option>
                        <option value="100" id="t_1">Hybrid (100 )</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 second_col" aria-label="Large select example"
                        onchange="cal_2('total_2', 'second_col');" aria-label="Large select example">
                        <option value="0" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 third_col" aria-label="Large select example"
                        onchange="cal_3('total_3', 'third_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Name Model</th>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                  </tr>
                  <tr>
                    <th scope="row">Add Third Model</th>
                    <td>
                      <select class="form-select form-select-md w-75 first_col" onchange="cal('total_1', 'first_col');"
                        aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 second_col" aria-label="Large select example"
                        onchange="cal_2('total_2', 'second_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 third_col" aria-label="Large select example"
                        onchange="cal_3('total_3', 'third_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Name Model</th>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                    <td><input type="text" aria-label="Name the Model" class="form-control w-75"></td>
                  </tr>
                  <tr>
                    <th scope="row">Dashboard</th>
                    <td>
                      <select class="form-select form-select-md w-75 first_col" onchange="cal('total_1', 'first_col');"
                        aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 second_col"
                        onchange="cal_2('total_2', 'second_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select form-select-md w-75 third_col"
                        onchange="cal_3('total_3', 'third_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Revision</th>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                  </tr>
                  <tr>
                    <th scope="row">Delivery time</th>
                    <td>3 Days***</td>
                    <td>5 Days***</td>
                    <td>7 Days***</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                      <div class="btn button"><a class="button" href="ContinueBasic">Continue ( <span
                            id="total_1">100</span>
                          $ )</a></div>
                    </td>
                    <td>
                      <div class="btn button"><a class="button" href="ContinueStandard">Continue ( <span
                            id="total_2">
                            140
                          </span> $ )</a></div>
                    </td>
                    <td>
                      <div class="btn button"><a class="button" href="ContinuePremium">Continue ( <span
                            id="total_3">
                            200
                          </span> $ )</a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Tablet & Mobile Responsive -->

        <div class="main_con container-fluid w-100 mb-lg-3">
          <div class="wrapper">
            <input type="radio" name="slider" id="tab-1" checked="">
            <input type="radio" name="slider" id="tab-2">
            <input type="radio" name="slider" id="tab-3">
            <summary>
              <label for="tab-1" class="tab-1">BASIC</label>
              <label for="tab-2" class="tab-2">STANDARD</label>
              <label for="tab-3" class="tab-3">PREMIUM</label>
              <div class="slider"></div>
            </summary>
            <div class="card-area">
              <div class="cards">
                <div class="row row-1">
                  <div class="price-details">
                    <span class="price">$100</span>
                  </div>
                  <div class="content_wrapper text-center">
                    <ul class="features">
                      <li><i class="fas fa-check"></i><span>Python Jupiter Notebook </span></li>
                      <li><i class="fas fa-check"></i><span>5 Questions* Written</span></li>
                      <li><i class="fas fa-check"></i><span>6 Pages with 2000 words**</span></li>
                      <li><i class="fas fa-check"></i><span>Free Source Code</span></li>
                      <li><i class="fas fa-check"></i><span>Visualised Results</span></li>
                      <li><i class="fas fa-check"></i><span>Unlimited Revisions</span></li>
                      <li><i class="fas fa-check"></i><span>Delivered in 3 Days***</span></li>
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Second
                          Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 fouth_col" aria-label="Large select example"
                        onchange="cal_4('total_4', 'fouth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control  mt-2">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Third
                          Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 fouth_col" aria-label="Large select example"
                        onchange="cal_4('total_4', 'fouth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control  mt-2">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size:15px;">Select
                          Dashboard</span>
                      </li>
                      <select class="form-select form-select-md mt-2 mb-2 fouth_col" aria-label="Large select example"
                        onchange="cal_4('total_4', 'fouth_col');" aria-label="Large select example">>
                        <option value="0" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </ul>
                    <div class="btn button"><a class="button" href="ContinueBasic">BASIC (<span for="res"
                          id="total_4">100</span>$)</a></div>
                  </div>
                </div>




                <div class="row">
                  <div class="price-details">
                    <span class="price">$140</span>
                  </div>
                  <div class="content_wrapper text-center">
                    <ul class="features">
                      <li><i class="fas fa-check"></i><span>Python Jupiter Notebook </span></li>
                      <li><i class="fas fa-check"></i><span>10 Questions* Written</span></li>
                      <li><i class="fas fa-check"></i><span>15 Pages with 5000 words**</span></li>
                      <li><i class="fas fa-check"></i><span>Get Researched Topic</span></li>
                      <li><i class="fas fa-check"></i><span>Plagiarism Check</span></li>
                      <li><i class="fas fa-check"></i><span>Free Source Code</span></li>
                      <li><i class="fas fa-check"></i><span>Visualized Result</span></li>
                      <li><i class="fas fa-check"></i><span>Unlimited Revisions</span></li>
                      <li><i class="fas fa-check"></i><span>Delivered in 5 Days***</span></li>
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Second
                          Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 fifth_col" aria-label="Large select example"
                        onchange="cal_5('total_5', 'fifth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control ">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Third Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 fifth_col" aria-label="Large select example"
                        onchange="cal_5('total_5', 'fifth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control ">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size:15px;">Select Dashboard</span>
                      </li>
                      <select class="form-select form-select-md mt-2 mb-2 fifth_col" aria-label="Large select example"
                        onchange="cal_5('total_5', 'fifth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </ul>
                    <div class="btn button"><a class="button" href="ContinueStandard">STANDARD (<span for="res"
                          id="total_5">140</span>$)</a></div>
                  </div>
                </div>



                <div class="row">
                  <div class="price-details">
                    <span class="price">$200</span>
                  </div>
                  <div class="content_wrapper text-center">
                    <ul class="features">
                      <li><i class="fas fa-check"></i><span>Python Jupiter Notebook </span></li>
                      <li><i class="fas fa-check"></i><span>15 Questions* Written</span></li>
                      <li><i class="fas fa-check"></i><span>24 Pages with 8000 words**</span></li>
                      <li><i class="fas fa-check"></i><span>Get Researched Topic</span></li>
                      <li><i class="fas fa-check"></i><span>Plagiarism Check</span></li>
                      <li><i class="fas fa-check"></i><span>Free Source Code</span></li>
                      <li><i class="fas fa-check"></i><span>Visualised Results</span></li>
                      <li><i class="fas fa-check"></i><span>Unlimited Revisions</span></li>
                      <li><i class="fas fa-check"></i><span>Delivered in 7 Days***</span></li>
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Second
                          Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 sixth_col" aria-label="Large select example"
                        onchange="cal_6('total_6', 'sixth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="500">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control ">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size: 15px;">Add Third
                          Model</span>
                      </li>
                      <select class="form-select form-select-md  mt-2 mb-2 sixth_col" aria-label="Large select example"
                        onchange="cal_6('total_6', 'sixth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Model</option>
                        <option value="60">Time Series (60 $)</option>
                        <option value="80">Machine Learning (80 $)</option>
                        <option value="100">Deep Learning (100 $)</option>
                        <option value="100">Hybrid (100 $)</option>
                      </select>
                      <input type="text" aria-label="Name the Model" class="form-control">
                      <li class="mt-3"><i class="fas fa-check"></i><span style="font-size:15px;">Select
                          Dashboard</span>
                      </li>
                      <select class="form-select form-select-md mt-2 mb-2 sixth_col" aria-label="Large select example"
                        onchange="cal_6('total_6', 'sixth_col');" aria-label="Large select example">
                        <option value="0" id="t_1" selected="">Select Dashboard</option>
                        <option value="50">Excel Basic (50$)</option>
                        <option value="100">Excel Standard (100 $)</option>
                        <option value="200">Excel Premium (200 $)</option>
                        <option value="50">Power BI Basic (50 $)</option>
                        <option value="100">Power BI Standard (100 $)</option>
                        <option value="200">Power BI Premium (200 $)</option>
                      </select>
                    </ul>
                    <div class="btn button"><a class="button" href="ContinuePremium">PREMIUM ( <span
                          id="total_6">200</span>$
                        )</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- info -->
      <article>
        <div class="columns-info section2">
          <ul class="info">
            <li><span><i class="fa-solid fa-star" style="color: #EDB954;"></i></span> The number of questions that are
              asked in the analysis of your contents Research /Report.</li>
            <li><span><i class="fa-solid fa-star" style="color: #EDB954;"></i></span><span><i class="fa-solid fa-star"
                  style="color: #EDB954;"></i></span> Approximately 250-333 words = one page.</li>
            <li><span><i class="fa-solid fa-star" style="color: #EDB954;"></i></span><span><i class="fa-solid fa-star"
                  style="color: #EDB954;"></i></span><span><i class="fa-solid fa-star"
                  style="color: #EDB954;"></i></span> xclude weekend days.</li>
          </ul>
        </div>
      </article>

      <article class="section2">
        <h3 class="faq" style="font-weight: bold;">FAQs</h3>
        <div class="questions">
          <details class="details">
            <summary class="summary">
              How do you handle Models not working on python environment of the project?
            </summary>
            <p>
              When encountering a situation where a Python project is not working properly, utilize Excel or other
              software, seek expert advice if needed.
            </p>
          </details>
          <details class="details">
            <summary class="summary">
              What types of tools in prediction can you measurement the error?
            </summary>
            <p>
              Common tools for measuring prediction errors include Mean Absolute Error (MAE), Mean
              Squared Error (MSE), Root Mean Squared Error (RMSE), R-squared (R²), and Mean Absolute
              Percentage Error (MAPE).
            </p>
          </details>
          <details class="details">
            <summary class="summary">
              What level of detail do you provide in your reports?</summary>
            <p>
              We provide comprehensive reports that include key insights, conclusions, and
              recommendations. The level of detail will depend on your requirements and the complexity of
              the analysis.
            </p>
          </details>
        </div class="questions">
      </article>
    </section>
@endsection