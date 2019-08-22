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
    </div><br><br><br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ေခ်းငွါးသူအမည္</th>
            <th>မွတ္ပံုတင္နံပါတ္</th>
            <th> ဆက္သြယ္ရန္ဖုန္းနံပတ္ </th>
            <th>ၿမိဳ႕နယ္အမည္</th>
            <th> ျပည္နယ္/တိုင္းေဒသႀကီးအမည္</th>
            <th>ေထာက္ခံေပးသူအမည္</th>
        </tr>
        @foreach ($borrower as $borrowers)
        <tr>
            <td>{{$borrowers->name}}</td>
            <td>{{ $borrowers->nrc_no}}</td>
            <td>{{ $borrowers->ph_no}}</td>
            <td>{{ $borrowers->township}}</td>
            <td>{{ $borrowers->state}}</td>
            <td>{{ $borrowers->rname }}</td>
            <td>
                {{-- <form action="{{ route('borrowers.destroy',$borrower->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('borrowers.show',$borrower->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('borrowers.edit',$borrower->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $products->links() !!} --}}
    @endsection