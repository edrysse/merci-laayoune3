@extends('Admins.indexAdmin')

@section('content')

<style>
    td .btn {
        width: 100px;
    }
    .td-btn {
        position: absolute;
    }
    @media screen and (max-width: 992px){
        td {
            position: relative !important;
            
        } 
        td .btn {
        width: 100%;
    }
    }
</style>


    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <div class="jumbotron">
            <h4 style="color:black">ajouter un repas:</h4>
            <a class="btn btn-primary btn-lg" href="{{ route('repas.create') }}" role="button">create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">nom</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col" style="width: 330px">description</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($repas as $item)
                    <tr>
                        <td style="display: flex;justify-content: center; border-top: 0px;"><img style="border-radius: 0%; max-width:100px; max-height:100px; width: auto; height: auto;" src="{{ $item->image }}" alt="{{ $item->image }}" class="img-tumbnail"
                            style="width:100px;height:100px; !important"></td>
                        <td data-label="nom" style="white-space: wrap; border-top: 0px;">{{ $item->nom }}</td>
                        <td data-label="prix" style="border-top: 0px;">{{ $item->prix }}</td>
                        <td data-label="type" style="border-top: 0px;">{{ $item->type }}</td>
                        <td data-label="description" style="white-space: wrap; border-top: 0px;"><br>{{ $item->description }}</td>
                        
                        <td style="display: flex;flex-direction: column; border-top: 0px;" class="td-btn"><a class="btn btn-success" href="{{ route('repas.edit', $item->id) }}">edit</a>
                        
                         <a class="btn btn-primary" href="{{ route('repas.show', $item->id) }}">show</a>
                        
                            <form action="{{ route('repas.destroy', $item->id) }}" method="post">
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
