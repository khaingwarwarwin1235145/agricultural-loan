@extends('layouts.app')
@section('content')
    <div class="row" style="padding-top: 100px;">
        <div class="col-lg-12 margin-tb">
            <div style= "text-align: center;">
                <h2 style="text-align: center; color: forestgreen; font-weight: 700; text-align: center;">ေငြေခ်းထားသူမ်ားစာရင္း
                    </h2><br>
            </div>
            <div class="pull-right" style="padding-top: 50px; padding-right: 20px;">
                    <a class="btn btn-success" href="{{ route('info.create') }}">ေခ်းေငြမ်ားရယူရန္
                    </a>
            </div>
            <div class="pull-right" style="padding-top: 50px; padding-right: 20px;">
                <a class="btn btn-success" href="{{ route('borrowers.create') }}">စာရင္းတင္သူအသစ္ဖန္တီးရန္
                </a>
            </div>
        </div>
    </div><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" style="padding-top: 50px;">
        <tr style="background-color: forestgreen; color:aliceblue; font-weight: 400;">
            <th>ေခ်းငွါးသူအမည္</th>
            <th>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </th>
            <th>ဘဏ္မွထုတ္ေပးမည့္ေခ်းေငြ</th>
            <th>တစ္လအတြက္ေပးရမည့္အတိုး</th>
            <th>ဆပ္၇မည့္စုစုေပါင္းေခ်းေငြ</th>
            <th>ေခ်းေငြဆပ္သည့္ေန႔
            </th>
            <th>ဆက္သြယ္ရန္ဖုန္းနံပတ္ </th>
        </tr>
        @foreach ($borrower as $borrowers)
        <tr>
            <td>{{$borrowers->name}}</a></td>
            
            <td>{{ $borrowers->creditamount}}</td>
            <td>{{ $borrowers->toeamount}}</td>
            <td>{{ $borrowers->totalamount}}</td>
            <td>{{ $borrowers->returnmoney}}</td>
            <td>{{ $borrowers->returndate}}</td>
            <td>{{ $borrowers->ph_no}}</td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $products->links() !!} --}}
    @endsection