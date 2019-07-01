<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main class="bundle-content">
  <div class="container">
    <div class="row sticky__wrapper">
      <div class="col-lg-3 col-md-3 col-sm-12">
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
      <div class="col-lg-9 col-md-9 col-sm-12">
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
          <div class="bundle" id="career-outlook">
            <h2 class="bundle__title">Career Outlook</h2>
            <div class="bundle__content">
              <p class="detail__infor__sub">
                <canvas id="myChart" width="200" height="200"></canvas>
                <!-- <canvas id="bar-chart" width="800" height="450"></canvas> -->
                <!-- <canvas id="bar-chart-grouped" width="800" height="450"></canvas> -->
              </p>
            </div>
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
      var exceptionList = ['Institution', 'objectID', 'Admissons Link', 'Curriculum Link', 'Program Name', 'Total Credit Hours', 'Degree Level', 'Area of Study', 'Dates and Deadlines', 'Tuition and Fees Link', 'Per Credit Hour Tuition'];
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

    var ctx = $('#myChart');

    // let url = `https://api.data.gov/ed/collegescorecard/v1/schools?api_key=6lZ3mGdHSfNDUu8NgEgv8l6I1b8W3pcfO0zHLB3q&fields=,attendance.academic_year,latest.earnings.10_yrs_after_entry.working_not_enrolled.mean_earnings&school.name=${program["Institution"]}`;
    let url =`https://api.data.gov/ed/collegescorecard/v1/schools?api_key=6lZ3mGdHSfNDUu8NgEgv8l6I1b8W3pcfO0zHLB3q&fields=school.name,latest.aid.median_debt.completers.overall,latest.cost.avg_net_price.overall,latest.cost.tuition.out_of_state,latest.cost.tuition.in_state,latest.earnings.10_yrs_after_entry.working_not_enrolled.mean_earnings&school.name=${program["Institution"]}`;
    fetch(url)
      .then(function(response) {
        return response.json();
      })
      .then(function(myJson) {
        console.log(myJson['results']);
        if (myJson['metadata']['total'] == '0'){return;}
        var avgEarningsAfter10years = myJson['results'][0]["latest.earnings.10_yrs_after_entry.working_not_enrolled.mean_earnings"];
        var out_of_state_tuition = myJson['results'][0]["latest.cost.tuition.out_of_state"];
        var in_state_tuition = myJson['results'][0]["latest.cost.tuition.in_state"];
        var medianDebt = myJson['results'][0]["latest.aid.median_debt.completers.overall"];
          var data = [{x:'Earnings After 10 Years', y: avgEarningsAfter10years}, {x:'Median Debt', y:medianDebt}];        
          var myBarChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  datasets: [
                  {
                      label: 'In-State',
                      backgroundColor: 'rgb(199, 78, 26, 1)',
                      borderColor: 'rgb(199, 78, 26, 1)',
                      data: [in_state_tuition]
                  },
                  {
                      label: 'Out of State',
                      backgroundColor: 'rgb(36, 198, 218, 1)',
                      borderColor: 'rgb(36, 198, 218, 1)',
                      data: [out_of_state_tuition]
                  },
                                    {
                      label: 'Annual Earnings after 10 years (Median)',
                      backgroundColor: 'rgb(230, 114, 65, 1)',
                      borderColor: 'rgb(230, 114, 65, 1)',
                      data: [avgEarningsAfter10years]
                  },
                ]
              },

              options: {}
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
