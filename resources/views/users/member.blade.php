@extends('layouts.master')
@section('title','Members')
@section('content')
@include('users._partials.css')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h2>Members</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
          quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>
  </div>
  <div class="container">
    <ol>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li>Members</li>
    </ol>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="members" class="members">
  <div class="container">

    <div class="row">
      <div class="col-sm-4 col-md-3">
        <h6>Search</h6>
        <!-- <form>
          <div class="well">
            <div class="row">
              <div class="col-sm-12">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search dogs...">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </form> -->

        <!-- Filter -->
        <form action="{{ url('members') }}" type="get" role="search">
          <!-- Price -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-block btn-default" disabled="">Sex</button>
          </div>
          <div class="">
          <input class="form-check-input" type="radio" id="sex" name="sex" value="1">
                                <label class="form-check-label" for="male">MALE</label>
          </div>
          <div class="">
          <input class="form-check-input" type="radio" id="sex" name="sex" value="0">
                                <label class="form-check-label" for="female">FEMALE</label>
          </div>


          <div class="form-group shop-filter__price">
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn btn-block btn-default" disabled="">Age</button>
              </div>
              <div class="col-xs-4">
                <label for="from_age" class="sr-only"></label>
                <input id="from_age" name="from_age" type="number" min="0" class="form-control" placeholder="From">
              </div>
              <div class="col-xs-4">
                <label for="to_age" class="sr-only"></label>
                <input id="to_age" name="to_age" type="number" min="0" class="form-control" placeholder="To">
              </div>

            </div>
          </div>
          <!-- Pedgree -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-block btn-default" disabled="">Pedgree</button>
          </div>
          <div class="">
          <input class="form-check-input" type="radio" id="pedegree" name="pedigree" value="1">
                                <label class="form-check-label" for="pedigree">YES</label>
          </div>
          <div class="">
          <input class="form-check-input" type="radio" id="pedigree" name="pedigree" value="0">
                                <label class="form-check-label" for="pedigree">NO.</label>
          </div>

          <!-- Taglia -->
          <!-- <div class="col-xs-4">
            <button type="submit" class="btn btn-block btn-default" disabled="">Taglia</button>
            <p class="taglia-raza">(In Refremento ala Raza)</p>
          </div>
          <div class="radio">
            <input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
            <label for="shop-filter-price_1">Grande</label>
          </div>
          <div class="radio">
            <input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
            <label for="shop-filter-price_2">Media</label>
          </div>
          <div class="radio">
            <input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
            <label for="shop-filter-price_4">Piccola</label>
          </div> -->
          <button class="btn btn-success mt-3">Search</button>
        </form>
      </div>

      <div class="col-sm-8 col-md-9">
        <!-- Filters -->
        <!-- <ul class="shop__sorting">
          <li class="active"><a href="#">All</a></li>
          <li><a href="#">Popular</a></li>
          <li><a href="#">Newest</a></li>
          <li><a href="#">Best</a></li>
          <li><a href="#">Trending</a></li>
           
        </ul> -->

        <div class="row">  
          @if($users != null)  
          @foreach(@$users as $user)
          <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
            <div class="card" data-aos="fade-up" data-aos-delay="300">
            @if($user->profile_image)
            <a href="{{ url('user_profile/'.$user->id) }}">
            <img height="220px" class="card-img-top" alt="image" src="{{asset('').'storage/users/'.$user->id.'/'.$user->profile_image}}" />
            </a>
            @else
            <a href="{{ url('user_profile/'.$user->id) }}">
            <img height="220px" class="card-img-top" src="{{ asset('dog-prive/assets/img/1.jpg')}}" alt="">
            </a>
            @endif
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="small"><a href="{{ url('user_profile/'.$user->id) }}" class="">{{$user->surname}}</a></p>

                <p class="small"><a id="sp" href="javascript:void(0);"><i class="fa fa-heart" @if(isFavourite($user->id)) style="color: red" @endif id="heart{{$user->id}}" onclick="changeColor({{$user->id}})"></i></a> ({{$user->like_count}})</p>

                </div>

                <div class="d-flex justify-content-between mb-2">
                  <p class="text-muted mb-0">{{substr(@$user->dog_detail, 0, 30)}}...</p>

                </div>
                <div class="d-flex justify-content-between mb-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="rate py-3">
                      <div class="rating">
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label>

                      </div>
                    </div>
                    <div class="f-size">
                    (@if($user->getRatingAttributeCount()) {{round($user->getRatingAttributeCount(), 1)}} @else 0 @endif Reviews)
                    </div>
                  </div>
                  <!-- <div class="d-flex justify-content-between align-items-center">
                    <div class="rate py-3">
                      <div class="rating">
                        <div class="small text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg></div>
                      </div>
                    </div>

                  </div> -->
                </div>

              </div>
            </div>
          </div>
          @endforeach       
          @else
          <div class="col-lg-12 col-md-12">
          <div class="icon-box" data-aos="fade-up" style="text-align: center; color: red;">
            <span>Record Not Found!</span>
          </div>
        </div>         
          @endif
        </div> <!-- / .row -->      
      </div> <!-- / .col-sm-8 -->
    </div> <!-- / .row -->


  </div>
</section><!-- End Pricing Section -->

</main><!-- End #main -->

@endsection