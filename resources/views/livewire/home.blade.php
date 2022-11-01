<div class="container">

   {{-- BANNER --}}
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/slider/slider2.jpg"." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/slider/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/slider/slider3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
   {{-- PILIH PLATFORM  --}}
   <section class="pilih-liga mt-4">
      <h3><strong>Platform</strong></h3>
      <div class="row mt-4">
         @foreach($ligas as $liga)
         <div class="col">
            <a href="{{ route('products.liga', $liga->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Best Games</strong>
         <a href="{{ route('products') }}" class="btn btn-dark float-right">All Games </a>
      </h3>
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/Games') }}/{{ $product->gambar }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $product->name }}</strong> </h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block">Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>