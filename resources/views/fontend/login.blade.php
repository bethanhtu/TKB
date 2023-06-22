<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>TKBMOVIES login</title>
</header>

@if (count($errors) >0)
         <ul>
             @foreach($errors->all() as $error)
                 <li class="text-danger"> {{ $error }}</li>
             @endforeach
         </ul>
     @endif

     @if (session('status'))
         <ul>
             <li class="text-danger"> {{ session('status') }}</li>
         </ul>
     @endif
     


<section class="vh-100">
  <div class="container-fluid h-custom">
  <a class="float-right m-3 font-weight-bold cancel" href="/">X</a>
  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <h1 class="fw-normal mb-0 me-5 font-weight-bold p-3 logobrand">TKBMOVIES</h1>
      
      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
        
                  <p class="lead fw-normal mb-0 me-3">Đăng nhập bằng</p>
                     <button type="button" class="btn btn-primary btn-floating mx-1">
                     <i class="fab fa-facebook-f"></i>
                     </button>

                     <button type="button" class="btn btn-primary btn-floating mx-1">
                     <i class="fab fa-twitter"></i>
                     </button>

                     <button type="button" class="btn btn-primary btn-floating mx-1">
                     <i class="fab fa-linkedin-in"></i>
                     </button>
                  </div>

                  <div class="divider d-flex align-items-center my-4">
                     <p class="text-center fw-bold mx-3 mb-0">Or</p>
                  </div>
        <div class="form-outline mb-0">
        <form action="{{ route('getLogin') }}" method="post">
         {{ csrf_field() }}
         
                <div class="form-outline mb-0">
                    {!! Form::label('email', 'Email', array('class' => 'col-sm-3 control-label')) !!}
                    <div class="col-sm-100">
                      {!! Form::email('email', '', array('class' => 'form-control form-control-lg')) !!}
                    </div>
                </div>

                <div class="form-outline mb-0">
                    {!! Form::label('password', 'Password', array('class' => 'col-sm-3 control-label')) !!}
                    <div class="col-sm-100">
                      {!! Form::password('password', array('class' => 'form-control form-control-lg')) !!}
                    </div>
                </div>

                <div class="text-center text-lg-start mt-1 pt-2">
                    <button class="btn btn-primary btn-lg">
                      {!! Form::submit('Đăng nhập', array('class' => 'btn btn-primary btn-lg')) !!}
                    </button>
                    <p class="small fw-bold mt-0 pt-1 mb-0">Bạn chưa có tài khoản <a href="/register"
                          class="link-danger">Đăng ký</a></p>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .cancel {
    font-size: 30px;
  }
  .logobrand {
      color: red;
      align-items: center;
   }
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #408BEA;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>