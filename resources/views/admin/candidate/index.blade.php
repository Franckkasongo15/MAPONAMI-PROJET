@extends('admin.base')
@section('title', 'Liste des candidats')
@section('content')
    <a href="{{route('candidate.create')}}" class="btn btn-primary">Ajouter un bien</a>
    <table class="table table-striped">
        <thead>
        <th>Titre</th>
        <th>Surface</th>
        <th>Prix</th>
        <th>Ville</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($candidates as $candidate)
            <tr>
                <td>{{$candidate->name}}</td>
                <td>{{$candidate->email}}</td>
                <td>{{$candidate->vote_number}}</td>
                <td>{{$candidate->promotion}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('candidate.edit', $candidate  )}}"> Editer</a>
                    <form action="{{route('candidate.destroy', $candidate )}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
