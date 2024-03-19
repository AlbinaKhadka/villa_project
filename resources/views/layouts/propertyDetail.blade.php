<div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>
        <div class="col-lg-12">
            <div class="tabs-content">
                <div class="row">
                    <div class="nav-wrapper ">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($propertyTypes as $index => $type)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link @if($loop->first) active @endif"
                                            id="{{ $type->slug }}-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#{{ $type->slug }}"
                                            type="button"
                                            role="tab"
                                            aria-controls="{{ $type->slug }}"
                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                            onclick="showProperties('{{ $type->slug }}')">
                                        {{ $type->title }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($propertyTypes as $index => $type)
                            <div class="tab-pane fade @if($loop->first) show active @endif" id="{{ $type->slug }}" role="tabpanel" aria-labelledby="{{ $type->slug }}-tab">

                                @foreach ($type->Properties as $property)
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                            <li>Total Flat Space <span>{!! $property->total_flat_space !!}</span></li>
                                            <li>Floor numbers <span>{!! $property->floor_numbers !!}</span></li>
                                            <li>Numbers of rooms <span>{{ $property->number_of_rooms }}</span></li>
                                            <li>Parking Available
                                                <span>{{ $property->parking_available ? 'Yes' : 'No' }}</span></li>
                                            <li>Payment Process <span>{{ $property->payment_process }}</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{ Voyager::image($property->image) }}" alt="{{$property->title}}">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About {{ $type->title }}</h4>
                                    <p>{{ $property->description }}</p>
                                        <div class="icon-button">
                                            <a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>

                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
