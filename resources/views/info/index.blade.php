@extends('layouts.app')
@section('content')
<div id="main-box" style="height: 500px;">
    <div class="row" style="padding-top: 200px;">
        <div class="col-lg-4" style="padding-left: 150px;">
            <a href={{ route('info.create')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေခ်းေငြမ်ားရယူရန္</a>
        </div>
        <div class="col-lg-4" style="padding-left: 150px;">
            <a href={{ url('borrowers')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေခ်းေငြယူရန္စာရင္းသြင္းမည္
            </a>
        </div>
        <div class="col-lg-4" style="padding-left: 150px;">
                <a href={{ url('result')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေငြေခ်းထားသူမ်ားစာရင္း
                </a>
        </div>
</div>
@endsection
