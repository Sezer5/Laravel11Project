@extends('layouts.frontbasespecialsidebarless')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)
@section('icon', Storage::url($settings->icon))



@section('content')
    <div class="col-sm-12 padding-right">
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach ($faq as $rs)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $rs->id; ?>">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            {{ $rs->question }}
                        </a>
                    </h4>
                </div>
                <div id="<?php echo $rs->id; ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            {{ $rs->answer }}
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
            
        </div><!--/category-products-->
    </div>
    </div>
    </div>

@endsection
