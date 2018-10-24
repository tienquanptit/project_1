@extends('website')
@section('home')
<!-- Banner start -->
@include('layout.banner')
<!-- banner end -->

<!-- Search area start -->
@include('layout.search')
<!-- Search area start -->
<div class="featured-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>List Products</h1>
        </div>
        <ul class="list-inline-listing filters filteriz-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
        </ul>
        <div class="row filter-portfolio">
            <div class="cars">
               @foreach ($allApartment as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="tag button alt featured">Featured</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                           {{ number_format($item->price) }} /m2
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="{{ $item->image }}" alt="property-7" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="{{ route('apartment-detail',$item->slug) }}" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="assets/upload/img/property-7.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/upload/img/property-6.jpg" class="hidden"></a>
                                        <a href="assets/upload/img/property-3.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">{{ $item->name }}</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{ $item->address }}
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i> {{ $item->bedrooms }} Bedrooms
                                    </li>
                                    <li>
                                        <i class="flaticon-bath"></i> {{ $item->bathrooms }} Bathrooms
                                    </li>
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft: {{ $item->acreage }}
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i> {{ $item->garage }} Garage
                                    </li>
                                </ul>
                            </div>
                            <div class="footer">
                                <a href="#">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                    <i class="fa fa-calendar-o"></i> 2 years ago
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- services start -->
@include('layout.services')
<!-- services end -->

<!-- Recent Properties start -->
@include('layout.recentProperties')
<!-- Recent Properties end -->

<!-- Most Popular Places start -->
@include('layout.popularPlaces')
<!--Most Popular Placesstart end -->

<!-- Status -->
@include('layout.status')
<!-- Status end -->


<!-- Friendly Customer start -->
@include('layout.friendlyCustomer ')
<!-- Friendly Customer end -->

<!-- Post  start -->
@include('layout.post')
<!-- Post  start -->

<!-- partner start -->
@include('layout.partner')
<!-- partner end -->


@endsection
