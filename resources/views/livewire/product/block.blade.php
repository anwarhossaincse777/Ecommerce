
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if(sizeof($product->images)>0)
                    <img class="" src="{{asset('storage/'.$product->images[0]->image)}}" class="rounded mx-auto d-block" alt="...">
                @else
                    <div class="bg-secondary text-white text-center" style="height:200px;">
                        <h5>No Image</h5>

                    </div>
                @endif
                <h5 class="card-title">{{$product->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$product->price}}</h6>
                <p class="card-text">{{$product->description}}</p>
                <a href="#" class="card-link">Add to Card</a>
                <a href="#" class="card-link">Product Details</a>
            </div>
        </div>
    </div>

