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
							<img src="/assets/img/institutions/columbus-state-university.svg" alt="University of West Georgia logo">
						</div>
						<nav>
							<ul class="list-link__list">
								<li class="list-link__item"><a class="list-link__link" href="#list-link-1">Program Description</a></li>
								<li class="list-link__item"><a class="list-link__link" href="#list-link-2">Accreditation</a></li>
								<li class="list-link__item"><a class="list-link__link" href="#list-link-3">Career Outlook</a></li>
								<li class="list-link__item"><a class="list-link__link" href="#list-link-4">Admission</a></li>
								<li class="list-link__item"><a class="list-link__link" href="#list-link-5">Dates & Deadlines</a></li>
								<li class="list-link__item"><a class="list-link__link" href="#list-link-6">Tuition & Fees</a></li>
							</ul>
							<div class="mt-4 p-3">
								<a class="btn button-default btn-block list-link__btn" href="#">Apply Now</a>
								<a class="btn button-outline-02 btn-block list-link__btn" href="#">Request Info</a>
								<a class="mt-4 btn-block" href="#"><i class="fas fa-clipboard-list"></i> View Curriculum</a>
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
					<ul class="list-tags">
						<li>
							<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning">cpl</button>
						</li>
						<li>
							<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program">em</button>
						</li>
					</ul>

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
									Cost
									<strong id="total__cost"></strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bundles"></div>
				<!-- <div class="bundle-list">
					<div class="bundle" id="list-link-1">
						<h2 class="bundle__title">Program Description</h2>
						<div class="bundle__content">
							<p id="program__description__text" class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						</div>
					</div>
				</div>
				<div class="bundle-list">
					<div class="bundle" id="list-link-2">
						<h2 class="bundle__title">Accreditation</h2>
						<div class="bundle__content">
							<p class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p class="detail__infor__sub">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
						</div>
					</div>
				</div>
				<div class="bundle-list">
					<div class="bundle" id="list-link-3">
						<h2 class="bundle__title">Career Outlook</h2>
						<div class="bundle__content">
							<p class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<div class="row">
								<div class="col-6 d-flex align-items-center">
									<canvas id="myChart"></canvas>
								</div>
								<div class="col-6 d-flex align-items-center">
									<canvas id="chartjs-4"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bundle-list">
					<div class="bundle" id="list-link-4">
						<h2 class="bundle__title">Admission</h2>
						<div class="bundle__content">
							<p class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p class="detail__infor__sub">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
						</div>
					</div>
				</div>
				<div class="bundle-list">
					<div class="bundle" id="list-link-5">
						<h2 class="bundle__title">Dates & Deadlines</h2>
						<div class="bundle__content">
							<p class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
				</div>
				<div class="bundle-list">
					<div class="bundle" id="list-link-6">
						<h2 class="bundle__title">Tuition & Fees</h2>
						<div class="bundle__content">
							<p class="detail__infor__sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p class="detail__infor__sub">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<section>
		<div class="container section-related-slide">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="text-center related__title">Related Programs</h3>
					<div class="feature courses__list">
						<div class="courses__item">
							<div class="courses__wrapper">
								<div class="courses__top">
									<div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/program-single/header-img-1.jpg" alt=""></div>
								</div>
								<div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
									<a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
									<ul class="list-tags">
										<li>
											<button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
										</li>
										<li>
											<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
										</li>
										<li>
											<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="courses__item">
							<div class="courses__wrapper">
								<div class="courses__top">
									<div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/program-single/header-img-2.jpg" alt=""></div>
								</div>
								<div class="courses__content col-equal"><a class="courses__content__title" href="#">Master of Education in Early Childhood Education </a>
									<a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
									<ul class="list-tags">
										<li>
											<button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
										</li>
										<li>
											<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
										</li>
										<li>
											<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="courses__item">
							<div class="courses__wrapper">
								<div class="courses__top">
									<div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/program-single/header-img-3.jpg" alt=""></div>
								</div>
								<div class="courses__content col-equal"><a class="courses__content__title" href="#">Associate of Science in Financial Technology (Fintech)</a>
									<a class="courses__col-left" href="#"><span class="courses__content__institutions">Middle Georgia State University</span></a>
									<ul class="list-tags">
										<li>
											<button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
										</li>
										<li>
											<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
										</li>
										<li>
											<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="courses__item">
							<div class="courses__wrapper">
								<div class="courses__top">
									<div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/program-single/header-img-4.jpg" alt=""></div>
								</div>
								<div class="courses__content col-equal"><a class="courses__content__title" href="#">Bachelor of Science in Information Technology</a>
									<a class="courses__col-left" href="#"><span class="courses__content__institutions">Kennesaw State University</span></a>
									<ul class="list-tags">
										<li>
											<button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
										</li>
										<li>
											<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
										</li>
										<li>
											<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="courses__item">
							<div class="courses__wrapper">
								<div class="courses__top">
									<div class="courses__top__wrapper"><img class="courses__top__image" src="assets/img/program-single/header-img-5.jpg" alt=""></div>
								</div>
								<div class="courses__content col-equal"><a class="courses__content__title" href="#">Master of Education in Early Childhood Education </a>
									<a class="courses__col-left" href="#"><span class="courses__content__institutions">University of West Georgia</span></a>
									<ul class="list-tags">
										<li>
											<button class="aos" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Area of Study" data-original-title="" title="">aos</button>
										</li>
										<li>
											<button class="cpl" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="Credit for Prior Learning" data-original-title="" title="">cpl</button>
										</li>
										<li>
											<button class="ep" type="button" data-container="body" data-trigger="hover click" data-toggle="popover" data-placement="top" data-content="eMajor program" data-original-title="" title="">em</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<nav class="breadcrumb-wrapper">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="index.html">home</a></li>
				<li class="breadcrumb-item active"><a class="breadcrumb__link" href="#">degree and course listing</a></li>
				<li class="breadcrumb-item active"><a class="breadcrumb__link active" href="#">Master Of Education In Early Childhood Education</a></li>
			</ul>
		</nav>
	</div>

</main>

<?php include("includes/footer.php"); ?>
<script src="/assets/js/program-single.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
	//Chop of the tailing param of the URL to find the Algolia ID 
	//TODO: convert this to use the program name
	var params = getParams(window.location.href);

	var programID = params["id"];
	var client = algoliasearch('JBY4H547QZ', '133c145ebb78c84a04aefb61c32dba1d');
	var index = client.initIndex('goml_DEMO');
	
	index.getObjects([programID.toString()], function(err, content) {
		if (err) throw err;
		program = content['results'][0];
		console.log(program);
		hours = program["Total Credit Hours"] ? program["Total Credit Hours"] : 'N/A';
		Object.entries(program).forEach(([key, value]) => {
			console.log('' + key + ':' +  value + '');
			var block = `<div class="bundle-list"><div class="bundle" id="list-link-5"><h2 class="bundle__title">${toTitleCase(key)}</h2><div class="bundle__content"><p class="detail__infor__sub">${value}</p></div></div></div>`;
			if (key !== null && (value !== null && value !== '')) {
				$('.bundles').append(block);
			};
		});
		// console.log(program["Program Name"]);
		document.getElementById('program__title').innerHTML = program["Program Name"];
		document.getElementById('institution__name').innerHTML = program["Institution"];
		document.getElementById('program__level').innerHTML = program["Degree Level"];
		document.getElementById('total__hours').innerHTML = hours;
		document.getElementById('total__cost').innerHTML = program["Per Credit Hour Tuition"];
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