     @extends('frontend.template')

		@section('content')

      <!-- Linking -->
                <div class="linking">
                  <div class="container">
                    <ol class="breadcrumb">
                      <li><a href="{{url('/get-restaurant')}}"> Go To Restaurant</a></li>
                      <li class="active">Search</li>
                    </ol>
                </div>
            </div>

   				 @if($rests->count() > 0)
                    <!-- Products -->
                    <section class="padding-top-40 padding-bottom-60">
                    <div class="container">
                      <div class="row">

                        <!-- Shop Side Bar -->
                        <div class="col-md-3">
                        
                        </div>


                        <!-- Products -->
                        <div class="col-md-9">

                          <!-- Short List -->
                            <div class="short-lst">
                                <h2> Search Results 
                                <span style="float:right">
                                {{$rests->count()}} Item(s) for {{request()->input('query')}} 
                                </span>
                                </h2>
                            </div>
                           <!-- Items -->

 
                                <div class="item-col-4">
                                    <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                      <th scope="col">ItemName</th>
                                      </tr>
                                    </thead>
                                   @foreach ($rests as $rest)
                                    <tbody>
                                      <tr>
                                          <td>{{ $rest->menu_name }}</td>
                                      </tr>
                                  
                                    </tbody>
                                    @endforeach

                                  {{ $rests->links() }}

                                </table>

                                  </div>
                              </div>
                          </div>
                      </div>
                </section>
                @else
              <!-- Oder-success -->

                <section>
                <div class="container">
                     
    
                    <div>
                      <a href="#">
                        <center>  <img src="{{asset('assets/images/pnot.jpg')}}" alt="logo images">

                        </center>
                        </a>
                        <center> <h5>We couldn’t find any items matching your search. Please try a new keyword.</h5></center>

                      <!--   <center><a href="{{url('/get-restaurant')}}" class="btn-round">Return to Restaurant List</a><center>  -->


                          <center> <a href="{{url('/get-restaurant')}}"class="btn btn-primary a-btn-slide-text mr-4 ">
                        <!-- <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> -->
                        <span><strong>Go To Restaurant</strong></span>            
                        </a>
                       </center>
                    </div>


                    <div class="container">
                    
                                                    
                    </div> 
                   
                  </div>
              </section>
            @endif
          </div>

     		    				



	 @endsection