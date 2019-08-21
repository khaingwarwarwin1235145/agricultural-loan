@extends('layouts.app')

@section('content')
<div class="row" style="padding-top: 50px; padding-left: 30px;">

        <div class="col-lg-11" style="text-align:center;">
            <h2 style="color: forestgreen;">စာရင္းတင္သူ၏အေသးစိတ္အခ်က္အလက္မ်ား

                </h2>
        </div>
        <div class="col-lg-1" style="padding-top: 20px;">
            <a class="btn btn-primary" href="{{ route('borrowers.index') }}">ေနာက္သို႔</a>
        </div>

</div><br><br>
<div class="row main-box">
    <div class="col-lg-6">
        <h5 style="text-align: center; color: forestgreen; font-weight: 700;">ေခ်းငွါးသူ</h5><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ေခ်းငွါးသူအမည္</strong>
                    {{ $borrower->name}}
                </div>
            </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ေခ်းငွါးသူအမည္</strong>
                {{$borrower->name}}
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အဖအမည္</strong>
                {{$borrower->fathername}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>မွတ္ပံုတင္နံပါတ္</strong>
                {{$borrower->nrc_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>အလုပ္အကိုင္</strong>
                {{$borrower->work}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                {{$borrower->ph_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                {{$borrower->acre_no}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                {{$borrower->village}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ၿမိဳ႕နယ္အမည္</strong>
                {{$borrower->township}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                {{$borrower->state}}            
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <h5 style="text-align: center; color: forestgreen; font-weight: 700;">ေထာက္ခံေပးသူ</h5><br>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ေထာက္ခံေပးသူအမည္</strong>
                    {{ $borrower->rname}}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>အဖအမည္</strong>
                    {{$borrower->rfathername}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>မွတ္ပံုတင္နံပါတ္</strong>
                    {{$borrower->rnrc_no}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>အလုပ္အကိုင္</strong>
                    {{$borrower->rwork}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                    {{$borrower->rph_no}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                    {{$borrower->racre_no}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                    {{$borrower->rvillage}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ၿမိဳ႕နယ္အမည္</strong>
                    {{$borrower->rtownship}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                    {{$borrower->rstate}}            
                </div>
            </div>
            </div>
@endsection