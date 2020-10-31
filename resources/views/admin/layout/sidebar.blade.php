<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <a href="/dashboard">Home</a>
            </h5>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Categories
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <a href="{{route('dashboard.categories.index')}}" class="d-block">Show</a>
                <a href="{{route('dashboard.categories.create')}}" class="d-block">Create</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#products" aria-expanded="true" aria-controls="collapseOne">
                    Products
                </button>
            </h5>
        </div>

        <div id="products" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <a href="{{route('dashboard.products.index')}}" class="d-block">Show</a>
                <a href="{{route('dashboard.products.create')}}" class="d-block">Create</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseOne">
                    Users
                </button>
            </h5>
        </div>

        <div id="users" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <a href="{{route('dashboard.users.index')}}" class="d-block">Show</a>
                <a href="{{route('dashboard.users.create')}}" class="d-block">Create</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <a href="{{route('dashboard.carts.index')}}">Carts</a>
            </h5>
        </div>
    </div>
</div>
