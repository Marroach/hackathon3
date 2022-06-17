@extends('layout')

@section('content')

    <div class="container">
        <h1>St. Hector's Veterinary Clinic</h1>
        
        <form action="/search" method="get">
            @csrf
            <div class="search">
                Search by Owner:<br/>
                <br/>
                <input type="text" name="search-owner" value=""><br/>
                <br/>
                <button>Search</button><br/>
                <br/>
                
                Search by Pet:<br/>
                <br/>
                <input type="text" name="search-pet" value=""><br/>
                <br/>
                <button>Search</button>
            </div>
        </form>
    </div>

@endsection