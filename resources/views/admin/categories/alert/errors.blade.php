@if(Session::Has('errors'))
    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                id="type-error"> {{Session::get('errors')}}

        </button>
    </div>

@endif
