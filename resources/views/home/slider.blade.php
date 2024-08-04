<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        @foreach ($sliderdata_active as $rs)
                            
                       
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>{{ $rs->title }}</h1>
                                {{-- <h2>Free E-Commerce Template</h2> --}}
                                <p>{{ $rs->description }} </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ Storage::url($rs->image) }}" class="girl img-responsive" alt="" style="width:420px"/>
                                <img src="{{asset('assets')}}/User/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>
                        @endforeach
                        @foreach ($sliderdata as $rs)
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>{{ $rs->title }}</h1>
                                {{-- <h2>100% Responsive Design</h2> --}}
                                <p>{{ $rs->description }} </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ Storage::url($rs->image) }}" class="girl img-responsive" alt="" style="width:420px"/>
                                <img src="{{asset('assets')}}/User/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->