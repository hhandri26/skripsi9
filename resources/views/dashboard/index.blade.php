@extends('layouts.app')


@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="page-header"><h2>  Sample Dashboard <small> Just change any content here with real data </small> </h2></div>
<div class="p-5">

  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 50px;">
      <div class=" info-box" >
        <div class="icon bg-orange">
          <i class="fa fa-user"></i>
        </div>
        <div class="content">
          <h4> {{ $count_document }} </h4>
          Dokumen Kerjasama
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class=" info-box" >
        <div class="icon bg-cyan">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <div class="content">
          <h4> {{ $count_user }} </h4>
          User
          
        </div>                 
      </div>
    </div>
  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class=" info-box" >
        <div class="icon bg-cyan">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <div class="content">
          <h4> {{$usulan_kerjasama}} </h4>
          Usulan Kerjasama
          
        </div>                 
      </div>
    </div>
   
  </div>  
  <div class="row">
        <div class="col-md-12">
          <canvas id="myChart"></canvas>
        </div>
      
    </div>    
  


        
       

</div>


 <style type="text/css">
    .info-box {
       
       
        background: #fff;
        box-shadow: 1px 0px 3px rgba(0, 0, 0, 0.1);
        border-radius: 5px !important;
    }
    .info-box .icon{
      padding:20px;
      display: inline-block;
      text-align: center;
      background: #42b549;border-radius: 5px !important;  
      box-shadow: 1px 0px 3px rgba(0, 0, 0, 0.1);
       position: absolute;   
       margin-top:-20px;
       margin-left: 20px;
    }
    .info-box .icon i {
      font-size: 30px;
      
      color:#fff;
    }
    .info-box .content{
     
      padding: 15px 10px 0 10px;     
      font-size: 12px;
      text-align: right;
    }
    .info-box .content .info{
      padding: 10px ;
      border-top: solid 1px #ddd;
      margin-top: 10px;
      text-align: left;
      font-size: 11px;
      color: #999;
    }
     .info-box .content h4{
      font-size: 16px;
      font-weight: 500;
      margin-bottom: 5px;
     }

    .bg-orange {
      background: #ff9900 !important;
      color: #fff;
    }
    .bg-cyan {
      background: #00BCD4 !important;
      color: #fff;
    }
    .bg-green {
      background: #8BC34A  !important;
      color: #fff;
    }
    .bg-red {
      background: #E91E63  !important;
      color: #fff;
    }        
</style>    
<script>
  // === include 'setup' then 'config' above ===
  var config = {
      type: 'line',
      data,
      options: {}
    };
    var labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];
  var data = {
    labels: labels,
    datasets: [{
      label: 'Total Dokumen Per Bulan',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };
  $(document).ready(function(){
          
            
      var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels:[@foreach($count_per_month as $row){!! '"'.$row->month.'",'!!} @endforeach],
                datasets: [{
    label: 'Total Document Per Bulan',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [@foreach($count_per_month as $row){!! '"'.$row->total.'",'!!} @endforeach],
  }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
         
        });
</script>   

@stop