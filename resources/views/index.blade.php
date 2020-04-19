@include('template.head')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">PasarCoding</a></li>
                                            <li class="breadcrumb-item active">Covid-19 Status</li>
                                        </ol><br><br>
                                        <h3 class="header-title"><center><font size="5">Status Corona Seluruh {{$indo->name}}</font></center> </h3><hr>
                                            <span><center>Status di update secara REAL TIME Dari Kementerian Kesehatan & JHU</center></span><span><center>Update terakhir : {{ date('d F Y H:i', strtotime($indo->updated_at))}} WIB</center></span><br>
                                </div>
                            </div>
                        </div> 
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Kasus Positif</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$indo->positif}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-3">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Pasien Sembuh</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$indo->sembuh}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-3">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Meninggal</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$indo->meninggal}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-3">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center>Negara</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$indo->name}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div><br><br>
                        <!-- end row -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h3 class="header-title"><center><font size="5"> Status Corona Provinsi {{$central->provinsi}}</font></center></h3><hr>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-2 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Kasus Positif</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$central->kasus_positif}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-2 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Dalam Perawatan</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$rawat}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-2 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Kasus Sembuh</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$central->sembuh}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-2 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-normal mt-0"><b><center> Kasus Meninggal</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$central->meninggal}}</center></h3><br>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-4 col-lg-12">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">

                                            <h5 class="text-muted font-weight-small mt-0"><b><center> Provinsi</center></b></h5><hr>
                                            <h3 class="mt-2"><center>{{$central->provinsi}}</center></h3>
                                        </div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row --><br>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h3 class="header-title"><center><font size="5">Status Provinsi Lain</font></center> </h3><br>
                                    
                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Provinsi</th>
                                                    <th scope="col">Positif</th>
                                                    <th scope="col">Dalam Perawatan</th>
                                                    <th scope="col">Sembuh</th>
                                                    <th scope="col">Meninggal</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach ($data as $datas => $hasil)   
                                                <tr>
                                                    <th scope="row">{{$datas +1}}</th>
                                                    <td>{{ $hasil->provinsi }}</td>
                                                    <td>{{ $hasil->kasus_positif }}</td>
                                                    <td>{{ $hasil->kasus_positif - $hasil->sembuh - $hasil->meninggal }}</td>
                                                    <td>{{ $hasil->sembuh}}</td>
                                                    <td>{{ $hasil->meninggal }}</td>
                                                </tr>
                                                @endforeach 
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> <!-- container-fluid -->
                </div> <!-- content -->
@include('template.footer')