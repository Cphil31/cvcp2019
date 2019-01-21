@extends('layouts.template')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="container">

    <form>
        <div class="form-group">
            <div class="row">
            <div class="col">
            <label for="exampleInputName">Nom</label>
            <input type="text" class="form-control" placeholder="Doe">
            </div>
            <div class="col">
            <label for="exampleInputPrenom">Prénom</label>
            <input type="text" class="form-control" placeholder="John">
            </div>
        </div>
        <label for="exampleInputEmail1">Mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="JohnDoe@gmail.com">
    
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Object</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
    </form>
</div>
@endsection