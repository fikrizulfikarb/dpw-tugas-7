@extends ('client.section.base')

@section ('content')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-1 p-1">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">

                        <form action="{{ url('shop/filter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama produk</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                            </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>


                    </div>

                    
                    
                    
                </div>
            </div>

            <div class="col-lg-8">

                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Produk</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Toko</a>
                            </li>
                            
                        </ul>
                    </div>
                    
                </div>
               
                <div class="container">
                    <div class="row  ">


                        
                        @foreach ($list_produk as $produk)
                            <div class="col-md-5">

                                <div class="card mb-4 product-wap rounded-0 ">
                                    <div class="card rounded-0">
                                        <img class="card-img rounded-0 img-fluid"
                                            src="{{ asset('/public/assets/img/brand_04.png') }}">
                                        
                                        <div class="card-img-overlay rounded-2 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white" href="shop-single.html">
                                                        <i class="far fa-heart nav-icon"></i>
                                                    </a>
                                                </li>
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="shop-single.html">
                                                        <i class="far fa-eye nav-icon"></i> 
                                                    </a>
                                                </li>
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="shop-single.html">
                                                        <i class="fas fa-cart-plus nav-icon"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ url('/produkshop', $produk->id) }}"
                                            class="h3 text-decoration-none">{{ $produk->nama }}</a>
                                       
                                            <hr>
                                            <p>stok :{{ $produk->stok }}</p>
                                            
                                            
                                        <p class="text-center mb-0">Rp.{{number_format($produk->harga)  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                                tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

@endsection