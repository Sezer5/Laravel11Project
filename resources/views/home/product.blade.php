@extends('layouts.frontbasespecial')

@section('title',  $product->title)



@section('content')
    <div class = "col-sm-9 padding-right">
    <div class = "product-details"><!--product-details-->
    <div class = "col-sm-5">
    <div class = "view-product">
    <img src   = "{{ Storage::url($product->image) }}" alt = "" />
                    <h3>ZOOM</h3>
                </div>
                <div id = "similar-product" class = "carousel slide" data-ride = "carousel">

                    <!-- Wrapper for slides -->
                    <div class = "carousel-inner">
                    <div class = "item active">
                            @foreach ($images as $ds)
                                <a href = ""><img src = "{{ Storage::url($ds->image) }}" alt = ""></a>
                            @endforeach

                        </div>
                    </div>

                    <!-- Controls -->
                    <a class = "left item-control" href = "#similar-product" data-slide = "prev">
                    <i class = "fa fa-angle-left"></i>
                    </a>
                    <a class = "right item-control" href = "#similar-product" data-slide = "next">
                    <i class = "fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class = "col-sm-7">
            <div class = "product-information"><!--/product-information-->
            <img src   = "images/product-details/new.jpg" class = "newarrival" alt = "" />
                    <h2>{{ $product->title }}</h2>
                    <p>{{ $product->category->title }}</p>
                    <img src = "images/product-details/rating.png" alt = "" />
                    <span>
                        <span>US ${{ $product->price }}</span>
                        <label>Quantity: </label>
                        <input  type  = "text" value   = "{{ $product->quantity }}" />
                        <button type  = "button" class = "btn btn-fefault cart">
                        <i      class = "fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </span>
                               <p><b>Keywords   : </b> {{ $product->keywords }}</p>
                               <p><b>Description: </b> {{ $product->description }}</p>
                    <p><b>Rate Avr.             : </b>
                        
                                        @switch($product->comment->average('rate'))
                                            @case(1)
                                                <i class = "fa fa-star-o"></i>
                                                @break

                                            @case(2)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(3)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(4)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(5)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break

                                            @default
                                                <span>No Rate!</span>
                                        @endswitch
                    
                    </p>
                    <a href = ""><img src = "images/product-details/share.png" class = "share img-responsive"
                       alt  = "" /></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

        <div   class = "category-tab shop-details-tab"><!--category-tab-->
        <div   class = "col-sm-12">
        <ul    class = "nav nav-tabs">
        <li    class = "active"><a href       = "#details" data-toggle = "tab">Details</a></li>
        <li><a href  = "#reviews" data-toggle = "tab">Reviews ({{$product->comment->count('id')}})</a></li>
                </ul>
            </div>
            <div class = "tab-content">
            <div class = "tab-pane fade active in" id = "details">
            <div class = "col-sm-12">
            <div class = "product-image-wrapper">
            <div class = "single-products">
            <div class = "productinfo text-center">
                                    {{ $product->detail }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class = "tab-pane fade " id = "reviews">
                <div class = "col-sm-12">
                <div class = "col-sm-6">
                            @foreach ($comment as $rs)
                                
                           
                                <ul>
                                    <li>
                                        @if ($rs->user_id==NULL)
                                            <a href = ""><i class = "fa fa-user"></i>Guest</a>
                                        @else
                                            <a href = ""><i class = "fa fa-user"></i>
                                                {{$rs->user->name}}
                                            </a>
                                        @endif
                                    </li>
                                    <li>
                                        Rate: 
                                        @switch($rs->rate)
                                            @case(1)
                                                <i class = "fa fa-star-o"></i>
                                                @break

                                            @case(2)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(3)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(4)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break
                                            @case(5)
                                                <i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i><i class = "fa fa-star-o"></i>
                                                @break

                                            @default
                                                <span>No Rate!</span>
                                        @endswitch
                                        
                                    </li>
                                        
                                    <li><a href = ""><i class = "fa fa-calendar-o"></i>{{$rs->created_at}}</a></li>
                                </ul>
                                <p>
                                    {{$rs->review}}
                                </p>
                            @endforeach
                        </div>
                        <div class = "col-sm-6">
                            <p><b>Write Your Review</b></p>
                            @include('home.messages')

                            <form action = "{{route('storecomment')}}" method = "POST">
                                @csrf
                                <span>
                                    <input type = "text" name = "product_id" value = "{{ $product->id }}" hidden/>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type = "text" name = "subject" style = "width: 100%" placeholder = "Enter The Subject"/>
                                            </td>
                                            <td>
                                                <input type = "number" name = "rate" style = "width: 100%" placeholder = "Enter The Rate"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td       colspan = "2">
                                            <textarea name    = "review" placeholder = "Enter The Review"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan = "2">
                                                @auth
                                                    <button type = "submit" class = "btn btn-default pull-right">
                                                        Submit
                                                    </button>
                                                @else
                                                    <a      href = "/login">
                                                    <button type = "button" class = "btn btn-default pull-right">
                                                            Please Login For Review
                                                        </button>
                                                    </a>
                                                @endauth
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    
                                    
                                </span>
                                
                                
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div><!--/category-tab-->



    </div>
    </div>
    </div>

@endsection
