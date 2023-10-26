<header class="py-5" style="background-color: white">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-between">
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                <img class="img-fluid rounded-3 my-5" src="{{ $product['image'] }}" style="width: 300px; height: 300px"
                    alt="..." />
            </div>
            <div class="col-lg-8 col-xl-7 col-xxl-5">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2 fs-3">{{ $product['title'] }}</h1>
                    <h6>{{ $product['category'] }}</h6>
                    <p class="lead fw-normal-50 mb-4 mt-4">{{ $product['description'] }}</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-sm px-4 me-sm-3" href="#features">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
