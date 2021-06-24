<body style="background: #f0f0f0;">
  <div class="navbard flex justify-content-center align-items-center">
    <div class="d-flex justify-content-center align-items-center flex-column">
      <div class="position-relative">
      <a href="" class="fs-1 text-decoration-none text-dark">OYO.</a>
      </div>
      <form method="GET" action="{{ url('/guest/home') }}">
        <div class="input-group position-absolute" style="top: 12px; left:1000px;">
          <input type="search" class="border" style="" name="search">
        </form>
      <button class="btn btn-secondary" type="submit">Search</button>
      </div>
      <div class="d-flex">
        <a href="#" class="mt-5 px-3 fw-bold" style="color: #dcba82;">Food & Drink</a>
        <div class="dropdown mt-5">
          <a class="dropdown-toggle fw-bold text-dark"  href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Menu One</a></li>
            <li><a class="dropdown-item" href="#">Menu Two</a></li>
            <li><a class="dropdown-item" href="#">Menu Three</a></li>
          </ul>
        </div>
        <a href="#" class="text-dark mt-5 px-3 fw-bold">Travel</a>
        <a href="#" class="text-dark mt-5 px-3 fw-bold">Elements</a>
        <a href="#" class="text-dark mt-5 px-3 fw-bold">Inner Page</a>
        <a href="#" class="text-dark mt-5 px-3 fw-bold">Contact Us</a>
      </div>
    </div>
  </div>
</body>
