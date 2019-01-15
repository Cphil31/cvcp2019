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
                        <th scope="col">Titre</th>
                        <th scope="col">Etablissement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <th scope="row">2003</th>
                        <td>Certification de Développeur web</td>
                    <td>Simplon</td>
                </tr>
                    <tr>
                    <th scope="row">2013</th>
                    <td>BAC STT Option Informatique de Gestion </td>
                    <td>Baimbridge</td>
                    </tr>
                    
                </tbody>
            </table>
</div>
@endsection