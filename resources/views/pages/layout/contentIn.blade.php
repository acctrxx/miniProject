<div id="image-slider" class="splide" style="margin-top: 100px;">
	<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide d-flex justify-content-center" style="background-image: url('https://preview.colorlib.com/theme/content/images/xslider_3.jpg.pagespeed.ic.Yxq9iGhxek.webp'); position: relative;">
				<div class="text-wrap d-flex text-center justify-content-center align-items-center flex-column" style="background: #f0f0f0; position: absolute; z-index: 2; top: 630px; width: 500px; height: 300px; border-radius: 5px;">
					<div>
						<ul class="list-unstyled d-flex justify-content-center">
							<li><a href="#"><i class="bi bi-facebook text-dark"></i></a></li>
							<li><a href="#" class="mx-3"><i class="bi bi-twitter text-dark"></i></a></li>
							<li><a href="#"><i class="bi bi-instagram text-dark"></i></a></li>
						</ul>
					</div>
					<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
						<h2><a href="inner-page.html" class="text-black">Far far away behind the Word Mountains far from Away</a></h2>
						<p>Far far away, behind the word mountains, far from the.</p>
					<div class="meta">
							<span>May 10, 2020</span>
							<span>•</span>
							<span>5 mins read</span>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

{{-- Inner --}}

<div class="d-flex justify-content-around" style="margin-top: 100px;">
  <div class="d-flex flex-column">
    <p class="text-dark" style="font-size: 14px;">Share</p>
    <button class="btn text-dark border-dark">
      <i class="bi bi-facebook"></i>
    </button>
    <button class="btn text-dark border-dark my-2">
      <i class="bi bi-twitter"></i>
    </button>
    <button class="btn text-dark border-dark">
      <i class="bi bi-instagram"></i>
    </button>
  </div>
  <div class="flex-column" style="width: 650px;">
    <p>{{ $articles->content }}</p>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="/profile/{{ $articles->image }}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{ $articles->title }}</h5>
    <p class="card-text">{{ $articles->content }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<h5 class="mt-5 mb-4 text-dark text-center">RELATED ARTICLES</h5>
<div class="d-flex mb-5 justify-content-between align-items-center">
  @foreach ($data as $item)
  <div class="flex-column" style="width: 250px;">
      <img style="height: 200px;" src="/profile/{{ $item->image }}" alt="">
      <div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
      <h2><a href="inner-page.html" class="text-black fs-5">{{ $item->title }}</a></h2>
      <div class="meta">
          <span>{{ $item->created_at }}</span>
          <span>•</span>
          <span>{{ $item->user->name }}</span>
      </div>
        <p><a href="inner-page.html" class="text-black fs-7">{{ $item->content }}</a></p>
    </div>
    @endforeach
  </div>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#image-slider', {
		'cover'      : true,
		'heightRatio': 0.8,
	}).mount();
	});
</script>