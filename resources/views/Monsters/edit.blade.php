@extends('../templates.base')
@section('titlePage', "Edit Monster - $monster->name")

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('monsters.update', $monster->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="index" class="form-label">Index</label>
                        <input type="text" class="form-control" id="index" name="index" value="{{ $monster->index }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $monster->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $monster->type }}">
                    </div>

                    <div class="mb-3">
                        <label for="alignment" class="form-label">Alignment</label>
                        <input type="text" class="form-control" id="alignment" name="alignment"
                            value="{{ $monster->alignment }}">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="size" name="size" value="{{ $monster->size }}">
                    </div>

                    <div class="mb-3">
                        <label for="hit_dice" class="form-label">Hit_dice</label>
                        <input type="text" class="form-control" id="hit_dice" name="hit_dice"
                            value="{{ $monster->hit_dice }}">
                    </div>

                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages</label>
                        <input type="text" class="form-control" id="languages" name="languages"
                            value="{{ $monster->languages }}">
                    </div>


                    <div class="mb-3">
                        <label for="armor_class'" class="form-label">Armor_class</label>
                        <input type="number" class="form-control" id="armor_class" name="armor_class"
                            value="{{ $monster->armor_class }}">
                    </div>

                    <div class="mb-3">
                        <label for="hit_points'" class="form-label">Hit_points</label>
                        <input type="number" class="form-control" id="hit_points" name="hit_points"
                            value="{{ $monster->hit_points }}">
                    </div>

                    <div class="mb-3">
                        <label for="strength'" class="form-label">Strength</label>
                        <input type="number" class="form-control" id="strength" name="strength"
                            value="{{ $monster->strength }}">
                    </div>

                    <div class="mb-3">
                        <label for="dexterity'" class="form-label">Dexterity</label>
                        <input type="number" class="form-control" id="dexterity" name="dexterity"
                            value="{{ $monster->dexterity }}">
                    </div>

                    <div class="mb-3">
                        <label for="constitution'" class="form-label">Constitution</label>
                        <input type="number" class="form-control" id="constitution" name="constitution"
                            value="{{ $monster->constitution }}">
                    </div>

                    <div class="mb-3">
                        <label for="intelligence'" class="form-label">Intelligence</label>
                        <input type="number" class="form-control" id="intelligence" name="intelligence"
                            value="{{ $monster->intelligence }}">
                    </div>

                    <div class="mb-3">
                        <label for="wisdom'" class="form-label">wisdom</label>
                        <input type="number" class="form-control" id="wisdom" name="wisdom"
                            value="{{ $monster->wisdom }}">
                    </div>

                    <div class="mb-3">
                        <label for="charisma'" class="form-label">charisma</label>
                        <input type="number" class="form-control" id="charisma" name="charisma"
                            value="{{ $monster->charisma }}">
                    </div>

                    <div class="mb-3">
                        <label for="xp'" class="form-label">Xp</label>
                        <input type="number" class="form-control" id="xp" name="xp" value="{{ $monster->xp }}">
                    </div>

                    <div class="mb-3">
                        <label for="challenge_rating'" class="form-label">Challenge_rating</label>
                        <input type="number" class="form-control" id="challenge_rating" name="challenge_rating"
                            value="{{ $monster->challenge_rating }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
