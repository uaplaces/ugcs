<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        @include('front.include.logo')

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">

            @include('front.include.menu')

            @include('front.include.search')

        </div>

    </div>
</nav>
