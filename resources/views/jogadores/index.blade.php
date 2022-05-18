@foreach($destaques as $destaque)
        <p>{{$destaque['Atleta']['nome']}}</p>
        <p>{{$destaque['posicao']}}</p>
    <br>
@endforeach