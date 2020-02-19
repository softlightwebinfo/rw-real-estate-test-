<div class="c-properties-grid__item">
    <h3 class="c-properties-grid-item__title">
        <a href="{{ route('property', $property) }}">{!! $property->name !!}</a>
    </h3>
    <p>{!! $property->description !!}</p>
    <ul class="c-properties-grid-item__list">
        <li>Price: {!! $property->feature->price !!} €</li>
        <li>Location: {!! $property->location->name !!}</li>
        <li>bedrooms: {!! $property->feature->bedrooms !!}</li>
        <li>Bathrooms: {!! $property->feature->bathrooms !!}</li>
        <li>Built Area: {!! $property->feature->built_area !!} m2</li>
    </ul>
</div>
