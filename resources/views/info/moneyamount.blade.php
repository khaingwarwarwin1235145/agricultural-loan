@extends('layouts.app')
@section('content')
<div id="main-box" style="height: 400px;">
    @include('inc.tab')
    <br><br><br>

    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
        <div class="col-lg-3">ဘဏ္မွထုတ္ေပးမည့္ေခ်းေငြ
        </div>
        <div class="col-lg-1">=</div>
    <div class="col-lg-2">
        <?php 
            $moneyamount = $input['acre_no'];
            $result = $moneyamount * 100000;
            echo $result;
            ?>က်ပ္

            </div>
    </div><br>
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
        <div class="col-lg-3">တစ္လအတြက္ေပးရမည့္အတိုး
        </div>
        <div class="col-lg-1">=</div>
        <div class="col-lg-2">
                <?php 
                $moneyamount = $input['acre_no'];
                $result = $moneyamount * 100000;
                $result_2 = $result * 0.02;
                echo $result_2;
                ?>က်ပ္

        </div>
    </div><br>
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
        <div class="col-lg-3">၈လအတြက္စုစုေပါင္းအတိုး
        </div>
        <div class="col-lg-1">=</div>
        <div class="col-lg-2">
                <?php 
                $moneyamount = $input['acre_no'];
                $result = $moneyamount * 100000;
                $result_2 = $result * 0.02;
                $result_3 = $result_2 * 8;
                echo $result_3;
                ?>က်ပ္

        </div>
    </div><br>
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
        <div class="col-lg-3">ခ်းေငြထုတ္ယူသည့္ရက္စြဲ 
        </div>
        <div class="col-lg-1">=</div>
        <div class="col-lg-2">
            <?php
            echo  date("Y-m-d") ;
            ?>
        </div>
    </div><br>
    {{-- <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
        <div class="col-lg-3">င္ေခ်းေငြျပန္ဆပ္ရမည့္ေနာက္ဆံုးလ
        </div>
        <div class="col-lg-1">=</div>
        <div class="col-lg-2">
           
        </div>
    </div><br> --}}
    <div class="row" style="color: forestgreen; weight: 400; padding-left: 30px;">
            <div class="col-lg-3">ေခ်းေငြထုတ္ရမည့္ကုတ္နံပါတ္
            </div>
            <div class="col-lg-1">=</div>
            <div class="col-lg-2">
                <a style="background-color: forestgreen; color:aliceblue; font-weight: 400; padding: 10px;">
                    <?php
                    echo mt_rand(0, 10);
                    //     mt_srand(10);
                    //     $count = 0;
  
                    //     while($count < 10) {
                    //         echo mt_rand(0, 100)." ";
                    //         $count++;
                    // }
                    ?>

                </a>
            </div>
        </div>
</div>

@endsection