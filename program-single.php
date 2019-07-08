<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main class="bundle-content">
  <div class="container">
    <div class="row sticky__wrapper">
      <div class="col-lg-9 col-md-12 order-lg-2">
        <div class="bundle-header__about">
          <div class="bundle-header__image" style="background-image: url(/assets/img/program-single/header-img-1.jpg)" data-overlay="6"></div>
          <h1 id="program__title" class="bundle-header__title">Master of Education in Early Childhood Education</h1>
          <p id="institution__name" class="bundle-header__content">
            University Of West Georgia
          </p>
        </div>
        <div class="bundle-header__highlight">
          <div class="row">
            <div class="col-4">
              <div class="additional_info rounded shadow p-3 p-lg-4 h-100">
                <div class="card h-100 justify-content-center">
                  <img src="/assets/img/program-single/book.svg">
                  Degrees
                  <strong id="program__level"></strong>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="additional_info rounded shadow p-3 p-lg-4 h-100">
                <div class="card h-100 justify-content-center">
                  <img src="/assets/img/program-single/graph.svg">
                  Total Credit Hours
                  <strong id="total__hours"></strong>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="additional_info rounded shadow p-3 p-lg-4 h-100">
                <div class="card h-100 justify-content-center">
                  <img src="/assets/img/program-single/piggy-bank.svg">
                  Per Credit Hour Cost
                  <strong id="total__cost"></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bundles">
        </div>
        <br />
        <br />
        <div class="bundle-list">
          <canvas id="myChart"></canvas>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 d-print-none order-lg-1">
        <div id="menu-left">
          <div class="list-link">
            <div class="institutions-logo-single">
            </div>
            <nav>
              <ul class="list-link__list">
              </ul>
              <div id="quickLinks" class="mt-4 p-3">
                <a class="btn button-default btn-block list-link__btn" target="_blank" id="applynowlink" href="#">Apply Now</a>
                <a class="btn button-outline-02 btn-block list-link__btn" id="instPageLink" href="#">Request Info</a>
                <a class="mt-4 btn-block" id="curric-link" href="#"><i class="fas fa-clipboard-list"></i> View Curriculum</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <nav class="breadcrumb-wrapper">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a class="breadcrumb__link" href="index.html">home</a></li>
        <li class="breadcrumb-item active"><a class="breadcrumb__link" href="#">degree at programs</a></li>
        <li class="breadcrumb-item active"><a class="breadcrumb__link active" href="#"></a></li>
      </ul>
    </nav>
  </div>

</main>

<?php include("includes/footer.php"); ?>
<script src="/assets/js/program-single.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
  var params = getParams(window.location.href);

  var programID = params["id"];
  var client = algoliasearch('JBY4H547QZ', '133c145ebb78c84a04aefb61c32dba1d');
  var index = client.initIndex('goml_DEMO');

  index.getObjects([programID.toString()], function(err, content) {
    if (err) throw err;
    program = content['results'][0];

    hours = program["Total Credit Hours"] ? program["Total Credit Hours"] : 'N/A';
    pchcost = program["Per Credit Hour Tuition"] !== '' ? "$" + program["Per Credit Hour Tuition"] : '$199';

    var logoImage = `<a href="/institutions-single.php?query=${program['Institution'].replace(/\s+/g, '-').toLowerCase()}"><img id="institution-logo-image" src="/assets/img/institutions/${program["Institution"].replace(/\s+/g, '-').toLowerCase()}.svg" alt="${program["Institution"]} logo"></a>`;
    $('.institutions-logo-single').append(logoImage);
    Object.entries(program).forEach(([key, value]) => {
      // console.log('' + key + ':' +  value + '');
      var anchor = key.replace(/\s+/g, '-').toLowerCase();
      var block = `<div class="bundle-list"><div class="bundle" id="${anchor}"><h2 class="bundle__title" name="${toTitleCase(key)}">${toTitleCase(key)}</h2><div class="bundle__content"><p class="detail__infor__sub">${value}</p></div></div></div>`;
      var listLink = `<li class="list-link__item"><a class="list-link__link" href="#${anchor}">${toTitleCase(key)}</a></li>`;
      var exceptionList = ['Institution', 'objectID', 'Admissons Link', 'Curriculum Link', 'Program Name', 'Total Credit Hours', 'Degree Level', 'Area of Study', 'Dates and Deadlines', 'Tuition and Fees Link', 'Per Credit Hour Tuition', 'Collaborative', 'Credit for Prior Learning'];
      if (key !== null && (value !== null && value !== '' && !exceptionList.includes(key))) {
        $('.bundles').append(block);
        $('.list-link__list').append(listLink);
      };
    });
    // console.log(program["Program Name"]);
    document.getElementById('program__title').innerHTML = program["Program Name"];
    document.getElementById('institution__name').innerHTML = program["Institution"];
    document.getElementById('program__level').innerHTML = program["Degree Level"];
    document.getElementById('total__hours').innerHTML = hours;
    document.getElementById('total__cost').innerHTML = pchcost;
    document.getElementById('applynowlink').href = program["Admissons Link"];
    document.getElementById('instPageLink').href = '/institutions-single.php?query=' + program["Institution"].replace(/\s+/g, '-').toLowerCase();
    document.getElementById('curric-link').href = program["Curriculum Link"];
    if (program["Dates and Deadlines"] != null && program["Dates and Deadlines"].length > 0) {
      var deadlineLink = `<a class="mt-4 btn-block" id="deadlines-link" target="_blank" href="${program["Dates and Deadlines"]}"><i class="fas fa-calendar"></i> Dates & Deadlines</a>`;

      $('#quickLinks').append(deadlineLink);

    };
    if (program["Tuition and Fees Link"] != null && program["Tuition and Fees Link"].length > 0) {
      var feesLink = `<a class="mt-4 btn-block" id="fees-link" target="_blank" href="${program["Tuition and Fees Link"]}"><i class="fas fa-dollar-sign"></i> Tuition and Fees</a>`;
      $('#quickLinks').append(feesLink);
    };
    if (program["Credit for Prior Learning"] != null && program["Credit for Prior Learning"].length > 0) {
      var cplLink = `<a class="mt-4 btn-block" id="fees-link" target="_blank" href="${program["Credit for Prior Learning"]}"><i class="fas fa-book"></i> Credit for Prior Learning</a>`;
      $('#quickLinks').append(cplLink);
    };



    let url = `https://api.data.gov/ed/collegescorecard/v1/schools?api_key=6lZ3mGdHSfNDUu8NgEgv8l6I1b8W3pcfO0zHLB3q&fields=school.name,latest.aid.median_debt.completers.overall,latest.cost.avg_net_price.overall,latest.cost.tuition.out_of_state,latest.cost.tuition.in_state,latest.earnings.10_yrs_after_entry.working_not_enrolled.mean_earnings,latest.aid.median_debt.completers.overall&school.name=${program["Institution"]}`;
    fetch(url)
      .then(function(response) {
        return response.json();
      })
      .then(function(myJson) {
        console.log(myJson);
        if (myJson['metadata']['total'] == '0') {
          return;
        }
        var ctx = $('#myChart');
        var careerlink = `<li class="list-link__item"><a class="list-link__link" href="#career-outlook">Career Outlook</a></li>`;
        $('.list-link__list').append(careerlink);
        var careerblock = `<div class="bundle-list"><div class="bundle" id="career-outlook"><h2 class="bundle__title" name="Career Outlook">Career Outlook</h2><div class="bundle__content"><p class="detail__infor__sub"><canvas id="myChart"></canvas></p></div></div></div>`;

        $('.bundles').append(careerblock);
        var avgEarningsAfter10years = myJson['results'][0]["latest.earnings.10_yrs_after_entry.working_not_enrolled.mean_earnings"];
        var out_of_state_tuition = myJson['results'][0]["latest.cost.tuition.out_of_state"];
        var in_state_tuition = myJson['results'][0]["latest.cost.tuition.in_state"];
        var medianDebt = myJson['results'][0]["latest.aid.median_debt.completers.overall"];

        data = [];
        if (in_state_tuition != '') {
          data.push({
            label: 'In-State Tuition',
            backgroundColor: 'rgb(199, 78, 26, 1)',
            borderColor: 'rgb(199, 78, 26, 1)',
            data: [in_state_tuition]
          })
        };
        if (out_of_state_tuition != '') {
          data.push({
            label: 'Out of State Tuition',
            backgroundColor: 'rgb(36, 198, 218, 1)',
            borderColor: 'rgb(36, 198, 218, 1)',
            data: [out_of_state_tuition]
          })
        };
        if (medianDebt != '') {
          data.push({
            label: 'Median Debt Completers Overall',
            backgroundColor: 'rgb(168,169,173)',
            borderColor: 'rgb(168,169,173)',

            data: [medianDebt]
          })
        };
        if (avgEarningsAfter10years != '') {
          data.push({
            label: 'Median Annual Earnings after 10 years',
            backgroundColor: 'rgb(230, 114, 65, 1)',
            borderColor: 'rgb(230, 114, 65, 1)',
            data: [avgEarningsAfter10years]
          })
        };
        var myBarChart = new Chart(ctx, {
          type: 'bar',
          data: {
            datasets: data
          },

          options: {
            animation: {
              duration: 2200,
              easing: 'easeInOutCubic',
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;
                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];
                    ctx.fillText('$' + data, bar._model.x, bar._model.y - 5);
                  });
                });
              }
            },
            scales: {
              yAxes: [{
                ticks: {
                  // Include a dollar sign in the ticks
                  callback: function(value, index, values) {
                    return '$' + value;
                  }
                }
              }]
            },
            tooltips: {
              callbacks: {
                label: function(tooltipItems, data) {
                  return "$" + tooltipItems.yLabel.toString();
                }
              }
            },
            title: {
              display: true,
              text: 'Tuition vs. Earnings - Provided by data.gov '
            },
            responsive: true
          }
        });
      });
  });

  function toTitleCase(str) {
    return str.replace(
      /\w\S*/g,
      function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      }
    );
  };

  function getParams(url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split('=');
      params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
  };

</script>


</html>
