@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('recommenders.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ေခ်းငွါးသူအမည္</strong>
                    {{ $recommender->name }}
                </div>
            </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ေခ်းငွါးသူအမည္</strong>
                {{$id->name}}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အဖအမည္</strong>
                {{$recommender->fathername}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>မွတ္ပံုတင္နံပါတ္</strong>
                {{$recommender->nrc_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အလုပ္အကိုင္</strong>
                {{$recommender->work}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                {{$recommender->ph_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                {{$recommender->acre_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                {{$recommender->village}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ၿမိဳ႕နယ္အမည္</strong>
                {{$recommender->township}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                {{$recommender->state}}            
            </div>
        </div>
@endsection