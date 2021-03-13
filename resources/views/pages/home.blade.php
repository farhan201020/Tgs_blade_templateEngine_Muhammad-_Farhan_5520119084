@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    
<style type="text/css">
        html{
            scroll-behavior: smooth;
        }
        section{
            padding: 60px 0px;
        }
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
        }
        body{
        background-color: #7f1422;
    }
    </style>

<content>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://timelinecovers.pro/facebook-cover/download/burger-with-french-fries-facebook-cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://coverfiles.alphacoders.com/143/143063.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdQZxjBq-bQWSlK8lF5nwsXqifZSM3Ea89sQ&usqp=CAU" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        <div style="background-color: white height:100px">
                <div class="container">
      
                        <div class="col-md-8 mx-auto my-5 text-center">
                            <h1 style="color: white">Bahan Utama Pembuatan Burger</h1>
                        </div>
 
                </div>
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                <thead>
                <tr>
                    <th>
                    <div class="card">
                        <div style="">
                            <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2021/2/3/abf2ed9f-9cb6-49c0-8cab-449c9b4a8c3b.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Daging Sapi</h5>
                            <p class="card-text">Daging yang diolah dengan cara dicincang dan lalu dibentuk menjadi lingkaran dan lalu didiamkan di lemari pendingin agar awet </p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <div style="">
                            <img src="https://s0.bukalapak.com/img/06082149432/large/data.jpeg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Selada</h5>
                            <p class="card-text">Selada atau daun sla (Lactuca sativa) adalah tumbuhan sayur yang biasa ditanam di daerah beriklim sedang maupun daerah tropika.</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="https://ds393qgzrxwzn.cloudfront.net/resize/c500x500/cat1/img/images/0/1nvWKQ75ON.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Keju</h5>
                            <p class="card-text">Keju adalah sebuah makanan yang dihasilkan dengan memisahkan zat-zat padat dalam susu melalui proses pengentalan atau koagulasi</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="https://cf.shopee.co.id/file/a4f801b7ec3233a3e3ae42039b74432c" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Mayones</h5>
                            <p class="card-text">Mayones (bahasa Inggris: mayonnaise) adalah salah satu jenis saus yang dibuat dari bahan utama minyak nabati, telur ayam dan cuka.</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/3/20/441622124/441622124_7e407937-e84b-4bb2-ab60-92a417c5fd74_1560_1560.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Roti Burger</h5>
                            <p class="card-text">Roti burger mempunyai tampilan bentuk yang unik dan bulat serta terdapat taburan biji wijen di bagian permukaan roti tersebut.</p>
                            
                        </div>
                    </div>
                    </th>
                </tr>
              </table>
              </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto text-center">
                            <div style="text-align: center;">
                            <div style="color:white">
                            <h1>Sejarah Burger</h1>
                            <h5>Hamburger (atau sering kali disebut dengan burger) adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombay. Sebagai sausnya, burger diberi berbagai jenis saus seperti mayones, saus tomat dan sambal serta mustard. Beberapa varian burger juga dilengkapi dengan keju, asinan, serta bahan pelengkap lain seperti sosis dan ham.</h5>
                            <h5>Banyak orang keliru dan mengira bahwa nama Hamburger berasal dari kata Ham, namun sebenarnya namanya berasal dari kota Hamburg di Jerman, tempat makanan ini berasal. Dari kota kedua terbesar di Jerman ini banyak penduduknya yang beremigrasi ke Amerika dan menyebarkan pembuatan burger ke sana. Hanyalah sebuah kebetulan bahwa kata "ham" yang dalam bahasa Inggris berarti daging asap memiliki bunyi yang hampir serupa dengan Hamburger, faktanya hamburger tidak mengandung Ham (meskipun ada juga restoran yang menambahkan irisan Ham pada burger mereka untuk menambah cita rasa)</h5>
                           </div>
                            <x-modal theme="primary" judul="sejarah burger" btn="sejarah burger">
                            Hamburger (atau sering kali disebut dengan burger) adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombay. Sebagai sausnya, burger diberi berbagai jenis saus seperti mayones, saus tomat dan sambal serta mustard. Beberapa varian burger juga dilengkapi dengan keju, asinan, serta bahan pelengkap lain seperti sosis dan ham.
                            </x-modal>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <br>
            <br>
            <hr style="background-color: white; size:50px;">
            <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto text-center">
                            <div style="text-align: center;">
                            <div style="color:white;">
                            <h1>Etimologi Burger</h1>
                                    <h5>Banyak orang keliru dan mengira bahwa nama Hamburger berasal dari kata "Ham", namun sebenarnya namanya berasal dari kota Hamburg di Jerman, tempat makanan ini berasal. Dari kota kedua terbesar di Jerman ini banyak penduduknya yang beremigrasi ke Amerika dan menyebarkan pembuatan burger ke sana. Hanyalah sebuah kebetulan bahwa kata "ham" yang dalam bahasa Inggris berarti daging asap memiliki bunyi yang hampir serupa dengan Hamburger, faktanya hamburger tidak mengandung Ham (meskipun ada juga restoran yang menambahkan irisan Ham pada burger mereka untuk menambah cita rasa).</h5>
                                    <h5>Jadi secara harafiah dapat disimpulkan bahwa arti kata Hamburger berarti "makanan yang berasal dari Hamburg" dan bukan berarti "makanan yang mengandung Ham". Namun pada praktiknya burger atau hamburger lebih sering diartikan sebagai sandwich atau jenis roti isi lainnya yang berbentuk bulat. Dalam masyarakat kata burger sudah lebih melekat sebagai jenis makanannya daripada asal muasal dan pencipta dari burger.</h5>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            
</content>
            <br>
            <br>

        <!--Footer-->
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright: Muhammad Farhan
                <a class="text-dark" href="https://mdbootstrap.com/"></a>
            </div>
        <!-- Copyright -->
        </footer>

@endsection
@section('js')
    <script>
        console.log('Hello');
    </script>