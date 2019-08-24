@extends('layouts.app')
@section('content')
<div id="main-box" style="height: 400px;">
    @include('inc.tab')
    <br><br><br>
    @foreach ($borrower as $item)
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">  
            <div class="col-lg-3">ေခ်းငွါးသူအမည္ 
             </div>
            <div class="col-lg-1">=</div>
            <div class="col-lg-2">{{$item->name}}</div>
    </div><br>
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;"> 
        <div class="col-lg-3">ဆပ္၇မည့္စုစုေပါင္းေခ်းေငြ</div>
        <div class="col-lg-1">=</div>
        <div class="col-lg-2">{{$item->totalamount}}က်ပ္</div>
    </div><br>
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
                <div class="col-lg-3">ခ်းေငြထုတ္ယူသည့္ရက္စြဲ </div>
                <div class="col-lg-1">=</div>
                <div class="col-lg-2">{{$item->date}}</div>
        </div><br>
        <br>                                                                                                    
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 320px;">
            <a class="btn btn-primary" style="color: white" href={{route('returnmoney.index')}}>ေသခ်ာပါသည္
            </a>
        </div>                
        @endforeach
    </div>

@endsection