<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Amount</td>
                            <td>Price</td>
                            <td><strong>Price Total</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('assets/Games') }}/{{ $pesanan_detail->product->gambar }}" class="img-fluid" width="200">
                            </td>
                            <td>
                                {{ $pesanan_detail->product->name }}
                            </td>                   
                            <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                            <td>Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                            <td><strong>Rp. {{ number_format($pesanan_detail->total_harga) }}</strong></td>
                            <td>
                                <i wire:click="destroy({{ $pesanan_detail->id }})" class="fas fa-trash text-danger"></i>
                            </td>
                        </tr>    
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>   
                        @endforelse
                        
                        @if(!empty($pesanan))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Price : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Tax : </strong></td>
                            <td align="right"><strong>{{ number_format($pesanan->kode_unik) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total To Be Pay : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{ route('checkout') }}" class="btn btn-success btn-blok">
                                     Check Out
                                </a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>