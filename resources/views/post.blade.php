@extends('layouts.layout2')
@section('content')

	 <!-- ##### Course Area Start ##### -->
    <div class="cryptos-feature-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        
                        <img src="{{ Voyager::image( $post->image ) }}"><br><br><br>
                        <h3>{{ $post->title }}</h3>
                        <p>{!! $post->body !!}</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection