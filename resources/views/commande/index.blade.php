@extends('Admins.indexAdmin')


<style>
    td .btn {
        width: 100%
    }

</style>

@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <div class="jumbotron">
            <h1 style="color:black">All Commandes</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="width: 150px">Nom <br> Prenom</th>
                    {{-- <th scope="col"></th> --}}
                    <th scope="col" style="width: 150px;">ِContact</th>
                    {{-- <th scope="col">Telephone</th> --}}
                    <th scope="col" style="width:200px;">Adresse</th>
                    <th scope="col" style="width:230px">Commande</th>
                    <th scope="col" style="width:150px">Effectuée à</th>
                    <th scope="col" style="width: 90px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comnds as $item)
                    <tr>
                        <td data-label="Nom et Prenom" style="white-space: wrap">{{ $item->nom }} <br> <br> {{ $item->prenom }}</td>
                        {{-- <td></td> --}}
                        <td data-label="Contact" style="overflow: auto">{{ $item->phone }} <br><br> {{ $item->email }}</td>
                        {{-- <td>{{ $item->phone }}</td> --}}
                        <td data-label="Adresse" style="white-space: wrap; overflow: auto;">{{ $item->adresse }}</td>
                        <td data-label="Commande" style="overflow: auto">
                            {{-- {{str_replace("|", '<br>', $item->commande)}}  --}}
                            {{-- {{ $item->commande }} --}}
                            @php
                                $item->commande;
                                echo str_replace("|", "<br>", "$item->commande");
                            @endphp
                        </td>

                        
                        <td data-label="effectué à">
                            {{ $item->created_at }}
                        </td>
                        <td> <a class="btn btn-primary" href="{{ route('comnd.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        
                            <form action="{{ route('comnd.destroy', $item->id) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($msg = Session::get('succes'))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif

    </div>
@endsection
