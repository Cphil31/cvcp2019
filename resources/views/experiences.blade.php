@extends('layouts.template')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="container">  
    <table id="table" class="table table-striped">
        <thead>
            <tr class="">
                <th scope="col">Année</th>
                <th scope="col">Etablissement</th>
                <th scope="col">Lieu</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <th scope="row">2014 - 2016</th>
                <td>La pie verte</td>
            <td>Cornebarieu</td>
        </tr>
            <tr>
            <th scope="row">2010 - 2011</th>
            <td>Mairie de Petit Bourg </td>
            <td>Guadeloupe</td>
            </tr>
            <tr >
            <th scope="row">2005 - 2010 </th>
            <td>Agence foncière</td>
            <td>Guadeloupe</td>
            </tr>
        </tbody>
    </table>
</div>
    
    @endsection