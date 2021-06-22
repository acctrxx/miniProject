<div id="image-slider" class="splide" style="margin-top: 100px;">
	<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide d-flex justify-content-center" style="background-image: url('https://preview.colorlib.com/theme/content/images/xslider_1.jpg.pagespeed.ic.3OtL1OUixq.webp'); position: relative;">
				<div class="text-wrap d-flex text-center justify-content-center align-items-center flex-column" style="background: #f0f0f0; position: absolute; top: 550px; width: 500px; height: 300px; border-radius: 5px;">
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
			<li class="splide__slide d-flex justify-content-center" style="background-image: url('https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp'); position: relative;">
				<div class="text-wrap d-flex text-center justify-content-center align-items-center flex-column" style="background: #f0f0f0; position: absolute; top: 550px; width: 500px; height: 300px; border-radius: 5px;">
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
			<li class="splide__slide d-flex justify-content-center" style="background-image: url('https://preview.colorlib.com/theme/content/images/xslider_3.jpg.pagespeed.ic.Yxq9iGhxek.webp'); position: relative;">
				<div class="text-wrap d-flex text-center justify-content-center align-items-center flex-column" style="background: #f0f0f0; position: absolute; top: 550px; width: 500px; height: 300px; border-radius: 5px;">
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

{{-- Second Content --}}

<h5 class="mt-5 mb-4 text-dark">TODAY'S HIGHLIGHT</h5>
<div class="d-flex mb-5">
	<div class="flex-column" style="width: 390px;">
		<img style="height: 300px;" src="https://preview.colorlib.com/theme/content/images/xslider_1.jpg.pagespeed.ic.3OtL1OUixq.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
		<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
		<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
		</div>
			<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
	<div class="flex-column mx-4" style="width: 390px;">
		<img style="height: 300px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
			<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
			<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
			</div>
		<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
</div>

{{-- Middle Content --}}

@foreach ( $articles as $item)
	<div class="d-flex" style="width: 800px;">
		<a href="{{ url('/guest/inner', $item->id) }}"><img style="height: 130px;" src="/profile/{{ $item->image }}" alt=""></a>
		<div class="flex-column mx-3" style="margin-top: -20px;">
			<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">{{ $item->category->name }}</a></div>
				<h2><a href="{{ url('/guest/inner', $item->id) }}" class="text-black fs-5 mt-5">{{ $item->title }}</a></h2>
				<div class="meta mb-2">
					<span>{{ $item->created_at }}</span>
					<span>•</span>
					<span>Created by : {{ $item->user->name }}</span>
				</div>
			<p><a href="inner-page.html" class="text-black fs-7 mt-2">{{ $item->content }}</a></p>
		</div>
	</div>
@endforeach

{{-- Forth Content --}}

<div class="d-flex">
	<div class="flex-column">
		<h5 class="mt-5 mb-4 text-dark">LIFESTYLE</h5>
		<div class="d-flex" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_3.jpg.pagespeed.ic.Yxq9iGhxek.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
		<div class="d-flex" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
		<div class="d-flex my-5" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_1.jpg.pagespeed.ic.3OtL1OUixq.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
	</div>
	<div class="flex-column">
		<h5 class="mt-5 mb-4 text-dark">TRAVEL</h5>
		<div class="d-flex" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_3.jpg.pagespeed.ic.Yxq9iGhxek.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
		<div class="d-flex" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
		<div class="d-flex my-5" style="width: 600px;">
			<img style="height: 130px;" src="https://preview.colorlib.com/theme/content/images/xslider_1.jpg.pagespeed.ic.3OtL1OUixq.webp" alt="">
			<div class="flex-column mx-3" style="margin-top: -20px;">
				<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
					<h2><a href="inner-page.html" class="text-black fs-5 mt-5">Far far away behind the Word Mountains far from Away</a></h2>
					<div class="meta mb-2">
						<span>May 10, 2020</span>
						<span>•</span>
						<span>5 mins read</span>
					</div>
				<p><a href="inner-page.html" class="text-black fs-7 mt-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
			</div>
		</div>
	</div>
</div>

{{-- Almost Done Content --}}

<h5 class="mt-5 mb-4 text-dark text-center">FOOD AND DRINK</h5>

<div class="d-flex mb-5 justify-content-between align-items-center">
	<div class="flex-column" style="width: 250px;">
		<img style="height: 200px;" src="https://preview.colorlib.com/theme/content/images/xslider_1.jpg.pagespeed.ic.3OtL1OUixq.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
		<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
		<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
		</div>
			<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
	<div class="flex-column" style="width: 250px;">
		<img style="height: 200px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
			<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
			<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
			</div>
		<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
	<div class="flex-column" style="width: 250px;">
		<img style="height: 200px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
			<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
			<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
			</div>
		<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
	<div class="flex-column" style="width: 250px;">
		<img style="height: 200px;" src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" alt="">
		<div class="meta-cat fw-bold mt-3"><a href="#" style="color: #dcba82;">Food and Drink</a></div>
			<h2><a href="inner-page.html" class="text-black fs-5">Far far away behind the Word Mountains far from Away</a></h2>
			<div class="meta">
				<span>May 10, 2020</span>
				<span>•</span>
				<span>5 mins read</span>
			</div>
		<p><a href="inner-page.html" class="text-black fs-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</a></p>
	</div>
</div>

{{-- Footer --}}

<hr>

<ul class="social list-unstyled d-flex justify-content-center mt-5">
	<div class="d-flex">
		<li><a href="#"><i style="color: grey; font-size: 25px; margin: 0px 15px;" class="bi bi-facebook"></i></a></li>
		<li><a href="#"><i style="color: grey; font-size: 25px; margin: 0px 15px;" class="bi bi-twitter"></i></a></li>
		<li><a href="#"><i style="color: grey; font-size: 25px; margin: 0px 15px;" class="bi bi-linkedin"></i></a></li>
		<li><a href="#"><i style="color: grey; font-size: 25px; margin: 0px 15px;" class="bi bi-youtube"></i></a></li>
	</div>
</ul>

<p class="text-center text-dark">Copyright &copy; 2021 All rights reserved | This template is made with <i class="bi bi-heart-fill text-danger" aria-hidden="true"></i>  by Colorlib</p>

<p class="fw-bold text-center text-dark">Terms & Conditions / Privacy Policy</p>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#image-slider', {
		'cover'      : true,
		'heightRatio': 0.8,
	}).mount();
	});
</script>