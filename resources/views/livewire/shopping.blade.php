<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                      Keranjang
                    </div>
                    <div class="card-body">
                        {{ $jumlah }}

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                      Belanjaan saya
                    </div>
                    <div class="card-body">
                        @foreach ($datas as $item)
                            <p>{{ $item->nama_barang }}
                             <button class="btn btn-danger" wire:click="destroy({{ $item->id }})">
                                Hapus
                            </button>
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card" style="width: 50rem;">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/ganja.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Ganja</h5>
                                      <p class="card-text">Ganja edisi terbaru dengan kualitas yang baik dan hatga yang terjangkau.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp- 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                         wire:click="simpan('Ganja', '200000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/ganja.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Ganja</h5>
                                      <p class="card-text">Ganja edisi terbaru dengan kualitas yang baik dan hatga yang terjangkau.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp- 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('Ganja', '200000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/ganja.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Ganja</h5>
                                      <p class="card-text">Ganja edisi terbaru dengan kualitas yang baik dan hatga yang terjangkau.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp- 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('Ganja', '200000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/ganja.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Ganja</h5>
                                      <p class="card-text">Ganja edisi terbaru dengan kualitas yang baik dan hatga yang terjangkau.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Rp- 200.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('Ganja', '200000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
