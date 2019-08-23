@extends('layouts.app')
@section('content')
<div id="main-box" style="height: 400px;">
    @include('inc.tab')
    <br><br><br>
    @foreach ($borrower as $item)
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">  
            <div class="col-lg-3">ေခ်းငွါးသူအမည္ ဘဏ္မွထုတ္ေပးမည့္ေခ်းေငြ
             </div>
            <div class="col-lg-1">=</div>
            <div class="col-lg-2">{{$item->name}}</div>
    </div><br>
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">  
                <div class="col-lg-3">ဘဏ္မွထုတ္ေပးမည့္ေခ်းေငြ
                 </div>
                <div class="col-lg-1">=</div>
                <div class="col-lg-2">{{$item->creditamount}}  က်ပ္</div>
        </div><br>
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">  
            <div class="col-lg-3">တစ္လအတြက္ေပးရမည့္အတိုး</div>
            <div class="col-lg-1">=</div>
            <div class="col-lg-2">{{$item->toeamount}}က်ပ္</div>
        </div><br>
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;"> 
            <div class="col-lg-3">၈လအတြက္စုစုေပါင္း</div>
            <div class="col-lg-1">=</div>
        <div class="col-lg-2">{{$item->totalamount}}က်ပ္</div>
        </div><br>   
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
                <div class="col-lg-3">ေခ်းေငြထုတ္ရမည့္ကုတ္နံပါတ္
                    </div>
                <div class="col-lg-1">=</div>
                <div class="col-lg-2">
                    <a style="background-color: forestgreen; color:aliceblue; font-weight: 400; padding: 10px;">
                        {{$item->code}}
                    </a>
                </div>
        </div><br>
        <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
                <div class="col-lg-3">ခ်းေငြထုတ္ယူသည့္ရက္စြဲ </div>
                <div class="col-lg-1">=</div>
            <div class="col-lg-2">{{$item->date}}</div>
                           
        @endforeach
    </div>

@endsection