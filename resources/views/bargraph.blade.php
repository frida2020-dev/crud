@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col-12 col-sm-6">
    
    
 <div class="p-6 m-20 bg-white rounded shadow" >
          {!! $chart1->container() !!}
      </div>
  <br> <br>
  
</div>
  <div class="col-12 col-sm-6">
 <div class="p-6 m-20 bg-white rounded shadow">
          {!! $chart2->container() !!}
      </div>
  <br><br>
 
</div> 
</div>

<div class="row">
  <div class="col-12 col-sm-12">
    <div class="p-6 m-20 bg-white rounded shadow" >
      {!! $chart3->container() !!}
    </div>
  <br> <br>
  </div>

  <!-- <div class="col-12 col-sm-6">
    <div class="p-6 m-20 bg-white rounded shadow">
      {!! $chart2->container() !!}
    </div>
  <br><br>
  </div>  -->
</div>

<script src="{{ LarapexChart::cdn() }}"></script>
{{ $chart1->script() }}
{{ $chart2->script() }}
{{ $chart3->script() }}


@endsection