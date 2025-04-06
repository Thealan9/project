
<p class="fs-1 fw-bold text-center"style="font-family: inherit">Productos mas vendidos </p>
<br>
<div class="d-flex justify-content-evenly">
    @foreach ($products as $p)
    <div class="card text-center" style="width: 18rem;">
        <img src="/images/products/{{ $p->image }}" class="card-img-top p-2" alt="Imagen del producto">
        <div class="card-body">
            <h5 class="card-title">{{ $p->name_product }} </h5>
            <p class="card-text ">$ {{ $p->unit_price }} </p>
            @if (auth()->user() != null)
            <a href="#" class="btn btn-secondary" style="background-color: #D0C8C1; color: black; border-radius: 0;">Comprar</a>
        @endif
        </div>
    </div>

    @endforeach
</div>
<br>
