@extends('layouts.app')
@section('content')
<div class="row" style="padding-top: 50px; padding-left: 30px;">

            <div class="col-lg-11" style="text-align: center;">
                <h2 style="color: forestgreen;">စာရင္းတင္သူအသစ္ဖန္တီးရန္
                    </h2>
            </div>
            <div class="col-lg-1" style="padding-top: 20px;">
                <a class="btn btn-primary" href="{{ route('borrowers.index') }}">ေနာက္သို႔</a>
            </div>

</div>
       
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>ျဖည္​့စြက္​ခ်က္​မ်ား လြဲမွား​ေနပါသည္​။</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="main-box" style="height: 900px;">
        <form action="{{ route('borrowers.store') }}" method="POST" style="padding-left: 50px;">
                        @csrf
                <div class="row" style="padding-top: 60px;">
                        <div class="col-lg-6 main-box">
                            <h5 style="text-align: center; color:forestgreen; font-weight: 700;">ေခ်းငွါးသူ</h5><br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ေခ်းငွါးသူအမည္</strong>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>အဖအမည္</strong>
                                                    <input type="text" name="fathername" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>မွတ္ပံုတင္နံပါတ္ </strong>
                                                    <input type="text" name="nrc_no" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>အလုပ္အကိုင္ </strong>
                                                    <input type="text" name="work" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္</strong>
                                                    <input type="text" name="ph_no" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                                                    <input type="text" name="acre_no" class="form-control">
                                                </div>
                                        </div>   
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                                                    <input type="text" name="village" class="form-control">
                                                </div>
                                        </div>   
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> ၿမိဳ႕နယ္အမည္ ျ</strong>
                                                    <input type="text" name="township" class="form-control">
                                                </div>
                                        </div>   
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> ျပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                                                    <input type="text" name="state" class="form-control">
                                                </div>
                                        </div>   
                        </div>
                        <div class="col-lg-6 main-box">
                                <h5 style="text-align: center; color: forestgreen; font-weight: 700;">ေထာက္ခံေပးသူ</h5><br>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ေထာက္ခံေပးသူအမည္</strong>
                                                    <input type="text" name="rname" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>အဖအမည္</strong>
                                                    <input type="text" name="rfathername" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>မွတ္ပံုတင္နံပါတ္ </strong>
                                                    <input type="text" name="rnrc_no" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>အလုပ္အကိုင္ </strong>
                                                    <input type="text" name="rwork" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ဆက္သြယ္ရန္ဖုန္းနံပတ္</strong>
                                                    <input type="text" name="rph_no" class="form-control">
                                                </div>
                                        </div>  
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>ရပ္ကြက္/ေက်းရြာအမည္</strong>
                                                    <input type="text" name="rvillage" class="form-control">
                                                </div>
                                        </div>   
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> ၿမိဳ႕နယ္အမည္ ျ</strong>
                                                    <input type="text" name="rtownship" class="form-control">
                                                </div>
                                        </div>   
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> ျပည္နယ္/တိုင္းေဒသႀကီးအမည္</strong>
                                                    <input type="text" name="rstate" class="form-control">
                                                </div>
                                        </div>                                                
                                </div>
                        </div>
                        <br>                                                                                                    
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">ထည့္ပါ</button>
                        </div>
                </div>   
        </form>
    </div>
       
    
@endsection