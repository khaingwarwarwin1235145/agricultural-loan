@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recommenders.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>စဥ္</th>
            <th>ေခ်းငွါးသူအမည္</th>
            <th>အဖအမည္</th>
            <th>မွတ္ပံုတင္နံပါတ္</th>
            <th>အလုပ္အကိုင္</th>
            <th> ဆက္သြယ္ရန္ဖုန္းနံပတ္ </th>
            <th>ပိုင္ဆိုင္သည့္လယ္ဧက</th>
            <th> ရပ္ကြက္/ေက်းရြာအမည္</th>
            <th>ၿမိဳ႕နယ္အမည္</th>
            <th> ျပည္နယ္/တိုင္းေဒသႀကီးအမည္</th>
        </tr>
        @foreach ($recommenders as $recommender)
        <tr>
            <td>{{ $recommender->rid}}</td>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $recommender->name }}</td>
            <td>{{ $recommender->fathername }}</td>
            <td>{{ $recommender->nrc_no}}</td>
            <td>{{ $recommender->work}}</td>
            <td>{{ $recommender->ph_no}}</td>
            <td>{{ $recommender->acre_no}}</td>
            <td>{{ $recommender->village}}</td>
            <td>{{ $recommender->township}}</td>
            <td>{{ $recommender->state}}</td>
            <td>
                <form action="{{ route('recommenders.destroy',$recommender->rid) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('recommenders.show',$recommender->rid) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('recommenders.edit',$recommender->rid) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection