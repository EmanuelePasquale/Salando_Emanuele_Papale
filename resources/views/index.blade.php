<x-main>
    <div class="album py-5 bg-body-tertiary mt-5">
        <div class="container align-items-center">
            <div class="row g-3 align-items-center">
                @forelse ($products as $product)
                    <x-card :product="$product" />
                @empty
                    Nessun prodotto
                @endforelse
            </div>
        </div>
    </div>
</x-main>
