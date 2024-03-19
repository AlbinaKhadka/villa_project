<div class="properties section">
    <div class="container">
        <div class="row">
            <ul class="properties-filter">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                      <h6>| Properties</h6>
                      <h2>We Provide The Best Property You Like</h2>
                    </div>
                  </div>
                </div>
        <?php
$properties=App\Models\Property::all();
        ?>
            <div class="row">
                @foreach ($properties as $property)
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <a href="/property-details"><img src="{{ Voyager::image($property->image) }}" alt=""></a>
                            <span class="category">Luxury Villa</span>
                            <h6>${{ $property->price }}</h6>
                            <h4><a href="/property-details">{{ $property->street }}</a></h4>
                            <ul>
                                <li>Bedrooms: <span>{{ $property->bedrooms }}</span></li>
                                <li>Bathrooms: <span>{{ $property->bathrooms }}</span></li>
                                <li>Area: <span>{!! $property->area !!}</span></li>
                                <li>Floor: <span>{!! $property->floor_numbers !!}</span></li>
                                <li>Parking: <span>{{ $property->parkingspot }}</span></li>
                            </ul>
                            <div class="main-button">
                                <a href="/property-details">Schedule a visit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
