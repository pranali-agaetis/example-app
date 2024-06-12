@extends('layouts.main')
@push('title')
<title>Home</title>
@endpush
@section('main-section')
<section class="py-5" id="first-banner">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-12 col-md-9 col-xl-6 mb-4">
<div class="row no-gutters justify-content-center">
<div class="col-md-auto">
<img src="{{asset('assets/images/stars.svg')}}" width="60px" height="60px" class="d-none d-md-block">
</div>
<div class="col-12 col-md-8 text-center">
<h1 class="font-secondary text-uppercase text-dark line-height-0 mb-0 d-none d-md-block mx-2">Crafting
your Dream Kitchen With our worktops</h1>
<span class="h3 font-secondary text-uppercase text-dark line-height-0 mb-0 d-md-none">Crafting your Dream
Kitchen With our worktops</span>
</div>
<div class="col-md-auto">
<img src="{{asset('assets/images/stars.svg')}}" width="60px" height="60px" class="d-none d-md-block">
</div>
</div>
</div>
<div class="col-12 col-lg-9 text-center">
<div class="row banner-text mb-4">
<div class="col">
<div class="row justify-content-center no-gutters">
<div class="col-6 col-md-auto mr-md-3 vertical-pipe mb-3 mb-md-0">
<img src="https://houseofworktops.co.uk/catalog/view/theme/houseofworktops/image/svg-icons/info-ruler.svg" alt="Image 1"><br class="d-inline d-md-none">
<span class="ml-1">Up to 4.2m Length</span>
</div>
<div class="col-6 col-md-auto mr-md-3 vertical-pipe mb-3 mb-md-0">
<img src="https://houseofworktops.co.uk/catalog/view/theme/houseofworktops/image/svg-icons/info-width.svg" alt="Image 1"><br class="d-inline d-md-none">
<span class="ml-1">Up to 1.5m Width</span>
</div>
<div class="col-6 col-md-auto mr-md-3 vertical-pipe">
<img src="https://houseofworktops.co.uk/catalog/view/theme/houseofworktops/image/svg-icons/info-customize.svg" alt="Image 1"><br class="d-inline d-md-none">
<span class="ml-1">Fully Customisable</span>
</div>
<div class="col-6 col-md-auto">
<img src="https://houseofworktops.co.uk/catalog/view/theme/houseofworktops/image/svg-icons/info-style.svg" alt="Image 1"><br class="d-inline d-md-none">
<span class="ml-1">Over 60 Styles</span>
</div>
</div>
</div>
</div>
<button class="btn btn-success py-2 py-md-3 h6 px-5">Shop Worktops Now</button>
</div>
</div>
</div>
</section>
@endsection