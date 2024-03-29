@extends('layouts.app')
@section('content')
<div class="row" style="padding-top: 50px; padding-left: 30px;">

        <div class="col-lg-11" style="text-align:center;">
            <h2 style="color: forestgreen;">စာရင္းတင္သူ၏အေသးစိတ္အခ်က္အလက္မ်ားျပင္ရန္
 

                </h2>
        </div>
        <div class="col-lg-1" style="padding-top: 20px;">
            <a class="btn btn-primary" href="{{ route('borrowers.index') }}">ေနာက္သို႔</a>
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
<div id="main-box" style="height: 1000px;">
    <form action="{{ route('borrowers.update',$borrower->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="row" style="padding-top: 60px;">
        <div class="col-lg-6">
                <h5 style="text-align: center; color:forestgreen; font-weight: 700;">ေခ်းငွါးသူ</h5><br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ေခ်းငွါးသူအမည္</strong>
                            <input type="text" name="name" value="{{ $borrower->name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>အဖအမည္</strong>
                            <input type="text" name="fathername" value="{{ $borrower->fathername }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>မွတ္ပံုတင္နံပါတ္</strong>
                            <input type="text" name="nrc_no" value="{{ $borrower->nrc_no}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>အလုပ္အကိုင္</strong>
                            <input type="text" name="work" value="{{ $borrower->work}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                            <input type="text" name="ph_no" value="{{ $borrower->ph_no}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>အီးေမးလ္လိပ္စာ                                    </strong>
                                <input type="email" name="email" value="{{ $borrower->email}}" class="form-control">
                            </div>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                            <input type="text" name="acre_no" value="{{ $borrower->acre_no}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                            <input type="text" name="village" value="{{ $borrower->village}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ၿမိဳ႕နယ္အမည္</strong>
                            <input type="text" name="township" value="{{ $borrower->township}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                            <input type="text" name="state" value="{{ $borrower->state}}" class="form-control">
                        </div>
                    </div>
        </div>
        <div class="col-lg-6">
                <h5 style="text-align: center; color: forestgreen; font-weight: 700;">ေထာက္ခံေပးသူ</h5><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ေခ်းငွါးသူအမည္</strong>
                    <input type="text" name="rname" value="{{ $borrower->rname }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>အဖအမည္</strong>
                    <input type="text" name="rfathername" value="{{ $borrower->rfathername }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>မွတ္ပံုတင္နံပါတ္</strong>
                    <input type="text" name="rnrc_no" value="{{ $borrower->rnrc_no}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>အလုပ္အကိုင္</strong>
                    <input type="text" name="rwork" value="{{ $borrower->rwork}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </strong>
                    <input type="text" name="rph_no" value="{{ $borrower->rph_no}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                    <input type="text" name="rvillage" value="{{ $borrower->rvillage}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ၿမိဳ႕နယ္အမည္</strong>
                    <input type="text" name="rtownship" value="{{ $borrower->rtownship}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                    <input type="text" name="rstate" value="{{ $borrower->rstate}}" class="form-control">
                </div>
            </div>
        </div>
        </div><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection