@extends('layouts.app')
@section('title', 'contact')
@section('content')

<content>
<style>
        body{
    background:#7f1422;
    }
    .address-icon i{
        font-size: 36px;
        line-height: 32px;
    }
    .icons i{
        color: #fff;
        padding: 8px 0px;
        text-align: center;
        height: 30px;
        width: 30px;
        margin-right: 5px;
    }
    .fa-facebook{
        background-color: #3A5A99; 
    }
    .fa-twitter{
        background-color: #39CBFA;
    }
    .fa-linkedin{
        background-color: #3D99C0;
    }
    .fa-github{
        background-color: #000;
    }
</style>
<br><br>
    <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              <div class="row">
                  <div class="col-lg-12 col-12 p-0 contact-us">
                    <h4 style="text-align:center; color:white;">CONTACT US</h4><hr>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-12">
                    <h4 style="text-align:center;">ADDRESS</h4>
                  </div>
                  <div class="col-lg-4 col-4">
                      Kp. Pasar Baru,
                        Cianjur,Jawa Barat,
                        Indonesia, 43211.                          
                  </div>
                  <div class="col-lg-4 col-4">
                  <p class="m-0 text-danger"><i class="fa fa-phone-square" aria-hidden="true"></i>
                      082215192923
                  </p>
                  <p class="m-0 text-info"><i class="fa fa-envelope" aria-hidden="true"></i>
                      mf180053@gmail.com
                  </p>
                  </div>
                  <div class="col-lg-4 col-4 address-icon text-center text-danger">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
              </div>
              <div class="row bg-light pt-3 pb-3 mb-4">
                  <div class="col-lg-6 col-12">
                    <form>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Name :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Company :">
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Email :">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Mobile :">
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message :"></textarea>
                      </div>
                      <button type="submit" class="btn btn-danger mb-4">Send</button>
                    </form>
                  </div>
                  
              </div>
          </div>
      </div>
    </div>
</content>

    

@endsection
@section('js')