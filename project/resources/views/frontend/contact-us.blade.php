@extends('frontend.template')

@section('content')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--24">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center brad__white">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area --> 

<!-- Start Contact Map -->

<!-- End Contact Map -->

<!-- Start Address -->
<div class="food__contact">
    <div class="food__contact__wrapper d-flex flex-wrap flex-lg-nowrap">
        <!-- Start Single Contact -->
        <div class="contact">
            <div class="ct__icon">
                <i class="zmdi zmdi-phone"></i>
            </div>
            <div class="ct__address">
                <p><a>Phone: 0120 412 9730</a></p>
                <p><a>Phone: 0120 412 9730</a></p>
            </div>
        </div>
        <!-- End Single Contact -->
        <!-- Start Single Contact -->
        <div class="contact">
            <div class="ct__icon">
                <i class="zmdi zmdi-home"></i>
            </div>
            <div class="ct__address">
                <p>Address: A-90, 3rd Floor 201301,<br>  Sector 4, Noida, Uttar Pradesh 201301 </p>
            </div>
        </div>
        <!-- End Single Contact -->

        <!-- Start Single Contact -->
        <div class="contact">
            <div class="ct__icon">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="ct__address">
                <p><a href="#">delivery@e-mail.com</a></p>
                <p><a href="#">zaika.webcoir@gmail.com</a></p>
            </div>
        </div>
        <!-- End Single Contact -->
    </div>
</div>

<!-- End Address -->
<section class="food__contact__form bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__wrap">
                    <h2>Get In Touch With Zaika</h2>
                    <div class="contact__form__inner">

                     
                        <!-- Contact-Us Form Started -->

                        <form id="contact-form" action="{{url('/storecontus')}}" method="post">
                           @csrf

                           <div class="single-contact-form">

                            <div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">


                                <div class="form-group form-inline">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Your name"  value="{{ old('name') }}"  onkeypress="return (event.charCode > 
                                    64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" maxlength="35" >

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group form-inline">
                                    <label for="email">Email:</label>

                                    <input  type="email"  name="email"  placeholder="E-mail" value="{{ old('email') }}" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" />

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group form-inline">
                                    <label for="phone">Phone:</label>         
                                    <input type="tel" name="phone" id="phone" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10"  placeholder="Phone"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{old('phone') }}">
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box message">
                                <textarea name="message"  placeholder="Message*"></textarea>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="food__btn" id="submit-email" >
                            submit</button>
                        </div>
                    </form>

                </div>
                <div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

<script>
    
  function isNumberKey(evt)
  {
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

return true;
}

</script>

