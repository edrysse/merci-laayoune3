@extends('Admins.indexAdmin')

@section('content')


<style>
    td .btn {
        width: 250px;
    }
    .td-btn {
        /* position: absolute; */
        align-items: center;
        
    }
    @media screen and (max-width: 992px){
        td {
            position: relative !important;
            
        } 
        td .btn {
        width: 100%;
    }
    .td-btn {
        /* position: absolute; */
        align-items: stretch;
    }
    }
</style>



    <div class="container">
        <br><br><br><br>
        <section class="mb-5"
            style="background-image: url(clientpage/images/bg-title-page-01.jpg); padding: 5em 0em;">
            <h2 class="tit6 t-center" style="    font-size: 3rem;
            text-align: center;
            text-shadow: 0px 0 20px black;">
                Reviews
            </h2>
        </section>
        <div class="">
            {{-- <p style="color: black">créer un nouveau image:</p> --}}
            <a class="btn btn-primary btn-lg p-3" href="{{ route('reviews.create') }}" role="button">ajouter review</a>
        </div>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Nom complet</th>
                    <th scope="col">évaluation</th>
                    <th scope="col">commentaire</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $item)
                    <tr>
                        <td style="border-top: 0px; ">
                            {{ $item->nom }}
                        </td>
                        
                        <td style="border-top: 0px; ">{{ $item->rate }}</td>

                        <td style="border-top: 0px; ">
                            {{ $item->comment }}
                        </td>

                        <td style="border-top: 0px;"><a class="btn btn-success" href="{{ route('reviews.edit', $item->id) }}">edit</a>
                        

                        
                            <form action="{{ route('reviews.destroy', $item->id) }}" method="post">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       

    </div>
@endsection
