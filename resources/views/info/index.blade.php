@extends('layouts.app')
@section('content')
<div id="info" style="height: 500px;">
    <div class="row" style="padding-top: 200px;">
        <div class="col-lg-3" style="padding-left: 150px; " data-aos="fade-up">
            <a href={{ route('info.create')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေခ်းေငြမ်ားရယူရန္</a>
        </div>
        <div class="col-lg-3" style="padding-left: 150px;" data-aos="fade-up">
            <a href={{ url('borrowers')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေခ်းေငြယူရန္စာရင္းသြင္းမည္
            </a>
        </div>
        <div class="col-lg-3" style="padding-left: 150px;"  data-aos="fade-up">
                <a id="btn" href={{ url('result')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေငြေခ်းထားသူမ်ားစာရင္း
                </a>
        </div>
        <div class="col-lg-3" style="padding-left: 150px;" data-aos="fade-up">
            <a href={{ url('returnmoney.create')}} type="button" class="btn btn-default" style="background-color: forestgreen; color: white; weight: 400; padding: 20px; border-radius: 20px;">ေခ်းေငြဆပ္၇န္

            </a>
    </div>
</div>
@endsection
