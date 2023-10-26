<div class="col card-custom">
    <div class="card shadow-sm">
        <div style="padding: 20px 80px">
            <img class="bd-placeholder-img card-img-top w-100" style="height: 150px" src="{{ $product['image'] }}"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <figcaption>{{ $product['category'] }}</figcaption>
            </img>
        </div>
        <div class="card-body">
            <h1 class="fs-4 compact">
                {{ $product['title'] }}
            </h1>
            <p class="card-text pt-3 @if (Route::currentRouteName() == 'index') compact @endif">
                {{ $product['description'] }}
            </p>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <div class="btn-group">
                    @if (Route::currentRouteName() == 'index')
                        <a type="button" class="btn btn-sm btn-outline-secondary"
                            href="{{ route('show', ['uri' => $product['id']]) }}">View
                        </a>
                    @endif
                </div>
                <small class="text-body-secondary">€{{ $product['price'] }}</small>
            </div>
        </div>
    </div>
</div>
