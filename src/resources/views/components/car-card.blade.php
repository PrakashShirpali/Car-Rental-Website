

<div class="jhalak">
    <div class="jhalak-container">
        @if (isset($cars))
            @foreach ($cars as $car)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($car->image_url) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->model_name }}</h5>
                        <div>
                            <a href="tel:+7770076663">
                                <i class="bi bi-telephone-plus btn">
                                    Call to book
                                </i>
                            </a>
                            <a href="https://wa.me/7770076663">
                                <i class="bi bi-whatsapp btn">
                                    Book on whatsapp
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>