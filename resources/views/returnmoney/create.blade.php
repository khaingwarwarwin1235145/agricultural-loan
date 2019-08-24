@extends('layouts.app')
@section('content')

<div id="main-box" style="height: 500px;">
    @include('inc.tab')
    <form action="{{ route('returnmoney.store') }}" method="POST" style="padding-left: 50px;">
        @csrf
                <h3 style="text-align: center; font-weight: 700; color: forestgreen; padding-top: 50px;">ေခ်းေငြဆပ္၇န္
                </h5><br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ေခ်းငွါးသူအမည္</strong>
                            <input type="text" name="name" class="form-control">
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
                            <strong>ပိုင္ဆိုင္သည့္လယ္ဧက</strong>
                            <input type="text" name="acre_no" class="form-control">
                        </div>
                </div>               
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ေထာက္ခံေပးသူမွတ္ပံုတင္နံပါတ္ </strong>
                            <input type="text" name="rnrc_no" class="form-control">
                        </div>
                </div> 
                <br>                                                                                                    
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ေခ်းေငြဆပ္မည္</button>
                </div>    
    </form>
    @endsection         