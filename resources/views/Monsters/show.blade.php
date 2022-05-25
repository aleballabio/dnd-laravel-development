@extends('templates.base')

@section('pageTitle', "Details - $monster->name")

@section('content')
    <main>
        <div class="container">
            <table class="table table-dark">
                <tbody>
                    <tr>
                        <th scope="col">Index</th>
                        <td scope="col">{{ $monster->index }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Name</th>
                        <td scope="col">{{ $monster->name }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Type</th>
                        <td scope="col">{{ $monster->type }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Alignment</th>
                        <td scope="col">{{ $monster->alignment }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Size</th>
                        <td scope="col">{{ $monster->size }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Hit dice</th>
                        <td scope="col">{{ $monster->hit_dice }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Languages</th>
                        <td scope="col">{{ $monster->languages }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Armorclass</th>
                        <td scope="col">{{ $monster->armor_class }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Hit points</th>
                        <td scope="col">{{ $monster->hit_points }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Strength</th>
                        <td scope="col">{{ $monster->strength }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Dexterity</th>
                        <td scope="col">{{ $monster->dexterity }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Constitution</th>
                        <td scope="col">{{ $monster->constitution }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Intelligence</th>
                        <td scope="col">{{ $monster->intelligence }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Wisdom</th>
                        <td scope="col">{{ $monster->wisdom }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Charisma</th>
                        <td scope="col">{{ $monster->charisma }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Xp</th>
                        <td scope="col">{{ $monster->xp }}</td>

                    </tr>
                    <tr>
                        <th scope="col">Challenge_rating</th>
                        <td scope="col">{{ $monster->challenge_rating }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
