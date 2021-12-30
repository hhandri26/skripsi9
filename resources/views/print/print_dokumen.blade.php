<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <link href="{{ asset('sximo5/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('sximo5/bootstrap/js/bootstrap.min.js') }}"></script>
    <style>
    
@page {
    size: A4;
    margin: 0;
  }
  @media print {
    html, body {
      width: 210mm;
      height: 297mm;
    }
    /* ... the rest of the rules ... */
  }
.invoice-box {
    width: 210mm;
    margin: auto;
    
    font-size: 16px;
    font-family: "calibri";
    letter-spacing: 1px;
    
    height: 297mm;
    background-color: #fff;
  }
  
  .invoice-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
    
  }
  
  .invoice-box table td {
    vertical-align: top;
    line-height: 15px;
  }
  
 
  .invoice-box table tr.top table td {
    padding-bottom: 0px;
  }
  
  .invoice-box table tr.top table td.title {
    font-size: 45px;
    line-height: 45px;
    color: #333;
  }
  
  .invoice-box table tr.information table td {
    padding-bottom: 0px;
    
  }

  .invoice-box table tr.information_quo table td {
    padding-bottom: 0px;
  }
  
  .invoice-box table tr.heading th {
    border-bottom: 3px solid #5e5959;
    font-weight: bold;
    border-top: 3px solid #5e5959;
    text-align: center;
    line-height: 10px;
  }
  
  
  .invoice-box table tr.details td {
    padding-bottom: 20px;
  }
  
  .invoice-box table tr.item td {
    border-bottom: 1px solid #eee;
  }
  
  .invoice-box table tr.item.last td {
    border-bottom: none;
  }
  
  .invoice-box table tr.item input {
    padding-left: 5px;
  }
  
  .invoice-box table tr.item td:first-child input {
    margin-left: -5px;
    width: 100%;
  }
  
  .invoice-box table tr.total td:nth-child(2) {
    border-top: 2px solid #eee;
    font-weight: bold;
  }
  
  .invoice-box input[type="number"] {
    width: 60px;
  }
  
  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  
    .invoice-box table tr.information table td {
      width: 100%;
      display: block;
      text-align: center;
    }
  }
  
  /** RTL **/
  .rtl {
    direction: rtl;
    font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial,
      sans-serif;
  }
  
  .rtl table {
    text-align: right;
  }
  
  .rtl table tr td:nth-child(2) {
    text-align: left;
  }

  .nama_pt{
    font-size: 13px;
    font-weight: bold;
  }
  .alamat_pt{
    font-size: 13px;
  }
  .logo_pt{
    width: 120px;
    margin-right: 15px;
  }

  .judul{
    font-size: 20px;
    font-weight: bold;
  }
  .text-left{
    text-align: left !important;;
  }

  .box_bottom{
    top: 300px;
    position: relative;
    background-color: #fff;    
  }
  .box_bottom_quotation{
    position: relative;
    background-color: #fff;    
  }
  .md50{
      width: 50%;
      float: left;
      text-align: center;
      height: 10px;
  }
  .nama_pt2{   
    font-size: 18px;
    font-weight: bold;


  }
  .alamat_pt2{ 
    font-size: 13px;

  }
  .float_left{
    float: left;
    margin-right: 20px;
  }
  .nama_pt3{
    font-size: 13px;

  }
  .customer_address{
    text-align:left;
    padding-left: 10px;
    line-height: 15px;
    width: 300px;

  }
  .border_say{
    padding-top: 10px;
    border-top: 2px solid #5e5959;
    border-right: 2px solid #5e5959; 
     }
  .border_amount{
    border-top: 2px solid #5e5959;
    /* border-bottom: 4px double #5e5959; */
    /* height: 140px; */



  }
  .title_invoice{
    font-size: 30px;
    font-weight: bold;
    padding: 10px;

  }

.inv_right{
  line-height: 10px;
  
}
.col-md-8-n{
  width: 66.66666666666666%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-4-n{
  width: 33.33333333333333%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-7-n{
  width: 58.333333333333336%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-5-n{
  width: 41.66666666666667%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-6-n{
  width: 50%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-3-n{
  width: 25%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-md-1-n{
  width: 23%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
  
.col-md-9-n{
  width: 75%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-2-n{
  width: 19%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-md-10-n{
  width: 81%;
  float: left;
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
  

  
    </style>

    </head>
    <body>
        
        <page size="A4">
            <div class="invoice-box" id="listApp">
                <div class="row" style="height: 100px;text-align:center;">
                    <div class="col-md-6-n">
                        
                        <div style="margin-top: 6px;">                                          
                            <img src="{{ asset('.logo/'.$header->logo1)}}" alt="{{ config('sximo')['cnf_appname'] }}" width="100"  />                                            
                        </div>

                                   
    
                    </div>
                    <div class="col-md-6-n">
                        <div style="margin-top: 6px;">                                          
                            <img src="{{ asset('.logo/'.$header->logo2)}}" alt="{{ config('sximo')['cnf_appname'] }}" width="100"  />                                            
                        </div>
                       
    
                    </div>
                </div>
                
              
                <div class="row" style="margin-top: 10px; height: 300px;text-align:center;">
                    <div class="col-md-12">
                        {{$header->nama_dokumen}} <br>
                        Antara <br>
                        {{$header->nama_pihak_1}}
                        <br>
                        Dengan <br>
                        {{$header->nama_pihak_2}} <br>
                        No.:  {{$header->no_dokumen}}
                       

                    </div>
                   
    
                </div>
                <div class="row" style="margin-top: 20px; height: auto;">
                    <div class="col-md-12">
                    {{$header->isi}}
                    </div>
                </div>
                <div class="btm_footer" style="position: relative; bottom: 0;top: 180px;">
                  
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6-n text-center">
                        {{$header->keterangan_pihak_1}}
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            &nbsp;   {{$header->nama_pihak_1}} &nbsp; <br>
                            
                            (&nbsp;   {{$header->jabatan_pihak_1}} &nbsp;)
                    
        
                        </div>
                        <div class="col-md-6-n text-center">
                        {{$header->keterangan_pihak_2}}
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                &nbsp;   {{$header->nama_pihak_2}} &nbsp; <br>
                            (&nbsp;   {{$header->jabatan_pihak_2}} &nbsp;)
        
                        </div>
                    </div>

                </div>
                <div class="btm_footer" style="position: relative; bottom: 0;top: 200px;">
                  
                  <div class="row" style="margin-top: 20px;">
                      <div class="col-md-12-n text-center">
                      Mengetahui
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          &nbsp;   {{$header->mengetahui}} &nbsp; <br>
                          
                          (&nbsp;   {{$header->jabatan_mengetahui}} &nbsp;)
                  
      
                      </div>
                      
                  </div>

              </div>
                
                
                
            </div>
        </page>
        
    
       
        <script type="text/javascript">
   setTimeout(function() { 
        window.print();
   }, 1000);
</script>
    </body>
</html>
