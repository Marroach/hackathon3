@extends('layout')

@section('content')

    <div class="result">
        <ul>
            @foreach ($results as $result)
                <li>
                       {{-- {{dd($result)}}  --}}
                    <a href="/owner">
                    {{$result->first_name}}
                    {{$result->surname}}
                    </a>
                    
                </li>
            @endforeach
        </ul>

    </div>


@endsection