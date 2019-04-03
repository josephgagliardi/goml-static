<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main class="blog-gird">
	<div class="container">
		<div class="row blog-list">
			<!-- Blog Entries Cards List -->
		</div>
<!-- 		<div class="pagination-wrapper">
			<nav aria-label="Page navigation example">
				<ul class="pagination pagination__list">
					<li class="page-item pagination__item"><a class="page-link pagination__link " href="#">prev</a></li>
					<li class="page-item pagination__item"><a class="page-link pagination__link active" href="#">1</a></li>
					<li class="page-item pagination__item"><a class="page-link pagination__link " href="#">2</a></li>
					<li class="page-item pagination__item"><a class="page-link pagination__link " href="#">3</a></li>
					<li class="page-item pagination__item"><a class="page-link pagination__link " href="#">...</a></li>
					<li class="page-item pagination__item"><a class="page-link pagination__link " href="#">next</a></li>
				</ul>
			</nav>
		</div> -->
	</div>
</main>
<?php include("includes/footer.php"); ?>
<script type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script>

fetch('blogs.json', {mode: 'no-cors'}).then(response => {
 return response.json();
}).then(data => {
 $data = data;
 var entries = $data['feed']['entry'];
if (entries.length > 0) {
		for (let entry of entries) {
			var formattedTime = moment(entry['published']['$t'], 'YYYY-MM-DD').format('LL');
			console.log(formattedTime);
			var block = `<div class="col-md-6 col-sm-6">
					<div class="blog-col__item">
						<div class="blog__item__left"><a class="blog__item__link" href="${entry['link'][4]['href']}" data-posturl="${entry['link'][3]['href']}"><img class="blog__item__image" src="${entry['media$thumbnail']['url']}" alt=""></a></div>
						<div class="blog__item__right">
							<div class="blog__item__date">${formattedTime}</div><a class="blog__item__title" href="${entry['link'][4]['href']}">${entry['title']['$t']}</a>
							<div class="blog__item__sub">${entry['title']['$t']} ${entry['category'][0]['term']}…<a class="column-left__link" href="${entry['link'][4]['href']}">Read more</a></div>
						</div>
					</div>
				</div>`;
				$('.blog-list').append(block);
	}
}
}).catch(err => {
 console.log(`There has been an error ${err} reading blog posts.`);
});

</script>