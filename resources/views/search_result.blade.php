@extends('layout')

@section('content')

    <div class="result">
        <ul>
            @foreach ($results as $key => $result)
                <li>
                    
                    @if ($result->first_name)
                        
                       
                            <a href="/owner/{{$result->id}}">
                                {{$result->first_name}}
                                {{$result->surname}}
                            </a>
                        
                    @else
                            
                       
                            <a href="/pet/{{$result->id}}">
                                {{$result->name}}
                            </a>
                        
                    @endif
                </li>
            @endforeach
        </ul>

    </div>


@endsection