@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bar chart</h4>
        <canvas id="barChart" style="height: 230px;"></canvas>
      </div>
    </div>
</div>
@endsection
