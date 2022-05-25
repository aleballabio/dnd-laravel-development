@extends('templates.base')

@section('titlePage', 'monsters')


@section('content')
<main>
    <div class="container">

        <div class="row g-4">
            @foreach ($monsters as $monster)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a class="text-decoration-none text-dark" href="{{ route('monsters.show', $monster) }}">
                    <div class="card h-100 bg-card justify-content-between">

                        <h4 class="text-dark p-2">
                            {{ $monster->name }}
                        </h4>
                        <a class="btn btn-dark" href="{{ route('monsters.edit', $monster) }}">EDIT</a>

                    </div>
                </a>

            </div>

            @endforeach

            {{ $monsters->links() }}
        </div>
    </div>

</main>


@endsection
