@extends('layout.app')

@section('content')
    {{-- Bisa menggunakan dua cara echo ata {{...}} --}}    
    <h1><?php echo $subtitle ?></h1>
    @if (count($desc) > 0) {{-- Jika desc panjangnya lebih dari 0 artinya array --}}
        <ul>
            @foreach ($desc as $desc_item)
                <li>{{$desc_item}}</li>
            @endforeach
        </ul>
    @endif
    {{-- <h1>{{$subtitle}}</h1> --}}
@stop