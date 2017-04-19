@extends('layouts.app')
@section('content')

<!-- Navigation -->
@include('menu.menu')

<div style="background:#F5F5F5;" id="page-wrapper">

    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 id="page-header" class="page-header">
                        Dashboard 
                    </h1>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <article class="col-lg-12">
            <div class="col-lg-3 col-md-4">
                <div class="panel panel_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-4">
                                <article class="icons">
                                    <i style="font-size:40px;" class="fa fa-user" aria-hidden="true"></i>
                                </article>
                            </div>
                            <div class="col-xs-8 text-right">
                                <div class="huge">
                                    <span style="font-family: 'Spirax', cursive;font-size:20px;">{{ $doctor_count }}</span>
                                </div>
                                <div class="titles_panel">Doctor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="panel panel_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-4">
                                <article class="icons2">
                                    <i style="font-size:40px;" class="fa fa-area-chart" aria-hidden="true"></i>
                                </article>
                            </div>
                            <div class="col-xs-8 text-right">
                                <div class="huge">
                                    <span style="font-family: 'Spirax', cursive;font-size:20px;">{{ $operation_count }}</span>
                                </div>
                                <div class="titles_panel">Operation Report</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="panel panel_stats">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-4">
                              <article class="icons3">
                                <i style="font-size:40px;" class="fa fa-bar-chart" aria-hidden="true"></i>
                            </article>
                        </div>
                        <div class="col-xs-8 text-right">
                            <div class="huge">
                                <span style="font-family: 'Spirax', cursive;font-size:20px;">{{ $birth_count }}</span>
                            </div>
                            <div class="titles_panel">Birth Report</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="panel panel_stats">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-4">
                         <article class="icons4">
                            <i style="font-size:40px;" class="fa fa-bed" aria-hidden="true"></i>
                        </article>
                    </div>
                    <div class="col-xs-8 text-right">
                        <div class="huge">
                            <span style="font-family: 'Spirax', cursive;font-size:20px;">{{ $death_count }}</span>
                        </div>
                        <div class="titles_panel">Death Report</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<section class="col-lg-12">

    <article class="col-lg-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Operation</h3>
            </div>
            <div class="panel-body">
                <div id="operation" style="height: 250px;"></div>
            </div>
        </div>

    </article>

    <article class="col-lg-6">

        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">
                   <article class="row">
                     <div class="col-lg-6">Patience</div>
                     <div align="right" class="col-lg-6">{{ $patience_count }}</div>
                 </article>
             </h3>

         </div>
         <div class="panel-body">
          <div id="myfirstchart" style="height: 250px;"></div>
      </div>
  </div>

</article>

<article class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Pharmacy Orders</h3>
        </div>
        <div class="panel-body">
            <div id="orderss" style="height: 250px;"></div>
        </div>
    </div>

</article>

<article class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
             <article class="row">
                 <div class="col-lg-6">Death</div>
                 <div align="right" class="col-lg-6">{{ $death_count }}</div>
             </article>
         </h3>
     </div>
     <div class="panel-body">
        <div id="death_graph" style="height: 250px;"></div>
    </div>
</div>

</article>

<article class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">
            <article class="row">
                     <div class="col-lg-6">Birth</div>
                     <div align="right" class="col-lg-6">{{ $birth_count }}</div>
                 </article>
        </h3>
        </div>
        <div class="panel-body">
             <div id="birth_graph" style="height: 250px;"></div>
        </div>
    </div>

</article>

</section>

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
@endsection
