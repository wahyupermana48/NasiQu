@extends('layouts.frontend.main')

@section('content')
<div class="">

    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">NasiQu.</h1>
                        <p class="lead fw-normal text-muted mb-5">Merupakan Project Social yang bergerak di bidang donasi nasi bungkus bagi mereka yang membutuhkan. Donasi yang diberikan melalui aplikasi kami akan disalurkan langsung kepada orang-orang yang membutuhkan setiap minggunya. Mari berdonasi untuksaudara kita di yang membutuhkan di luar sana!</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center">
                                    <i class="bi-gift-fill me-2"></i>
                                    <span class="small">Donasi</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm caption-top">
                            <caption class="text-center">Daftar Donasi</caption>
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($donation as $donation)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $donation->nama }}</td>
                            <td>{{ $donation->jumlah }}</td>
                            <td>{{ date('d-m-Y', strtotime($donation->created_at)) }}</td>
                            <td>{{ $donation->status }}</td>
                          </tr>
                          @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="text-center" id="gallery">
        <div class="p-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <h1>Gallery NasiQu.</h1>
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-height: 400px">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/image1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/image3.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/image2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </aside>

    {{-- <!-- App features section-->
    <section id="features" class="d-none">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Device Mockups</h3>
                                    <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Flexible Use</h3>
                                    <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Free to Use</h3>
                                    <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Open Source</h3>
                                    <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section--> --}}

    <!-- App badge section-->
    <section class="" id="donate">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4 bg-gradient-primary-to-secondary"> <a href="#" style="text-decoration: none" class="text-white"> Donasi sekarang!</a></h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <div class="table-responsive w-100 m-lg-5">
                    <table class="table table-borderless table-sm caption-top">
                        <caption class="text-center">Daftar donasi<span class="fw-bold"> selesai</span> </caption>
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($success as $success)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $success->nama }}</td>
                            <td>{{ $success->jumlah }}</td>
                            <td>{{ date('d-m-Y', strtotime($success->created_at)) }}</td>
                            <td>{{ $success->status }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive w-100">
                    <table class="table table-borderless table-sm caption-top">
                        <caption class="text-center">Daftar donasi<span class="fw-bold"> menunggu konfirmasi</span> </caption>
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pending as $pending)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pending->nama }}</td>
                            <td>{{ $pending->jumlah }}</td>
                            <td>{{ date('d-m-Y', strtotime($pending->created_at)) }}</td>
                            <td>{{ $pending->status }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Donasi NasiQu</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="{{ route('donation.store') }}" autocomplete="off" enctype="multipart/form-data">
                      @csrf
                      <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nama</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Masukkan nama</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">No HP / WA</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Masukkan No. HP</div>
                        </div>

                        <div class="form-floating mb-3">
                          <select class="form-select" id="newField" name="rek" aria-label="New Field">
                              <option value="MANDIRI">Mandiri Syariah - 7126010014 </option>
                              <option value="NAGARI">Nagari - 2103.0207.12682.5 </option>
                          </select>
                          <label style="font-size: 19px" for="newField">Rekening Tujuan a.n Zulyusri</label>
                        </div>

                        <div class="mb-3 w-100">
                            <label for="formFile" class="form-label">Bukti Transfer</label>
                            <input class="form-control" type="file" name="image" id="formFile" required>
                          </div>

                        <!-- Nasi-->
                        <div class="form-floating mb-3 d-flex justify-content-between">
                            <div class="w-25">
                                <label for="price">Harga</label>
                                <input class="form-control" id="price" name="harga" type="number" required readonly/>
                            </div>
                            <div class="w-50 h-100">
                                <label for="ammount" class="mx-5 fs-6 text-nowrap">Jumlah Nasi</label>
                                <div class="d-flex">
                                    <p class="btn btn-danger" onclick="myFunction1()"><i class="bi bi-dash-circle"></i></p>
                                    <input class="mx-2 h-100 form-control" name="jumlah" id="ammount" type="number" required readonly/>
                                    <p class="btn btn-success" onclick="myFunction()"><i class="bi bi-plus-circle"></i></p>
                                </div>
                            </div>
                            
                        </div>
                        <!-- Message input-->
                        @auth
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="pesan" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Keterangan</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Tuliskan keterangan</div>
                        </div>
                        @endauth
                        <div class="text-muted">
                            <input type="number" class="d-none" id="dev"><input type="number" class="d-none" id="biaya"><p><span id="bungkus"></span> untuk nasi bungkus <br> <span class="" id="develop"></span> investment price</p>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" type="submit">Konfirmasi</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pesan KeripikQu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mt-3" method="POST" action="{{ route('order.store') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="">
                        <img src="{{ asset('img/keripik.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="mb-3">
                         <label for="category_id" class="form-label">Product</label>
                         <select class="form-select" id="inputGroupSelect01" name="category_id">
                              @foreach ($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->name }} - {{ $category->price }} / kg</option>
                              @endforeach
                         </select>
                    </div>

                    <div class="mb-3">
                         <label for="qty" class="form-label">Jumlah kg</label>
                         <input type="text" class="form-control" id="qty" name="qty" required>
                    </div>

                    <div class="mb-3">
                         <label for="address" class="form-label">Alamat</label>
                         <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="mb-3">
                         <label for="phone" class="form-label">No Handphone</label>
                         <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>  
@endsection