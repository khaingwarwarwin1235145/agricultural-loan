@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('recommenders.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('recommenders.update',$recommender->rid) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ေခ်းငွါးသူအမည္</strong>
                <input type="text" name="name" value="{{ $recommender->name }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အဖအမည္</strong>
                <input type="text" name="fathername" value="{{ $recommender->fathername }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>မွတ္ပံုတင္နံပါတ္</strong>
                <input type="text" name="nrc_no" value="{{ $recommender->nrc_no}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အလုပ္အကိုင္</strong>
                <input type="text" name="work" value="{{ $recommender->work}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                <input type="text" name="ph_no" value="{{ $recommender->ph_no}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                <input type="text" name="acre_no" value="{{ $recommender->acre_no}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                <input type="text" name="village" value="{{ $recommender->village}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ၿမိဳ႕နယ္အမည္</strong>
                <input type="text" name="township" value="{{ $recommender->township}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                <input type="text" name="state" value="{{ $recommender->state}}" class="form-control">
            </div>
        </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection