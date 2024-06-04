<div class="container">
    <div class="row mt-5">
        <h1 class="fs-5 text-center">Insert Many Card</h1>
    </div>
    <div class="row justify-content-center">
        <div class="w-50">
            <div class="card my-3">
                <div class="card-body">
                    <form class="row g-3 justify-content-center" action="" method="POST">
                        @csrf
                        <label class="visually-hidden">Nama produk</label>
                        <div class="d-flex gap-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name Produk" wire:model="products.0.name">
                            <input type="number" min="0" name="price" class="form-control" placeholder="Price" wire:model="products.0.price">
                        </div>

                        <div class="row-2">
                            <button class="btn btn-primary mb-3 ml-3" wire:click.prevent="add({{$i}})"><i class="bi bi-plus"></i></button>
                        </div>
                        {{-- Add Form --}}
                        @foreach ($inputs as $key => $value)
                        <label class="visually-hidden">Nama produk</label>
                        <div class="d-flex gap-3">
                            <input type="text" name="name{{ $key }}" class="form-control" placeholder="Your Name Produk" wire:model="products.{{ $key + 1 }}.name">
                            <input type="number" min="0" name="price{{ $key }}" class="form-control" placeholder="Price" wire:model="products.{{ $key + 1 }}.price">
                        </div>
                        <div class="col">
                            <button class="btn btn-light mb-3" wire:click.prevent="remove({{$key}})"><i class="bi bi-x"></i></button>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-12 -ps-5">
                                <button wire:click.prevent="store()" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

        </div>
    </div>
</div>