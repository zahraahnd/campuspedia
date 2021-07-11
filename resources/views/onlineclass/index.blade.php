@extends('onlineclass.layouts.master')

@section('content')
	    <!-- Breadcomb area Start-->
		<div class="breadcomb-area">
			<div class="container">
				<div class="row"><br><br>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcomb-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="breadcomb-wp">
										<div class="breadcomb-icon">
											<i class="notika-icon notika-windows"></i>
										</div>
										<div class="breadcomb-ctn">
											<h2>Peserta Class</h2>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
									<div class="breadcomb-report">
										<button data-toggle="modal" data-target="#modalAdd" data-placement="left" class="btn"><i class="notika-icon notika-sent"></i>    Add Data</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcomb area End-->

		<!--Tabel data-->
		<div class="data-table-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="data-table-list">
                            <div class="table-responsive">
                                        <table id="data-table-basic" class="table table-striped">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="width: 5%">No</th>
                                                    <th style="width: 15%">Nama</th>
                                                    <th style="width: 5%">Umur</th>
                                                    <th style="width: 15%">E-mail</th>
                                                    <th style="width: 15%">Pekerjaan</th>
                                                    <th style="width: 15%">kategori Kelas</th>
                                                    <th style="width: 15%">Kelas</th>
                                                    <th style="width: 15%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $i=0; ?>
                                                @foreach($data_onlineclass as $data)
                                                <?php $i++; ?>
                                                <tr class="text-dark">
                                                    <td class="text-center">{{$i;}}</td>
                                                    <td>{{$data->nama}}</td>
                                                    <td>{{$data->usia}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->pekerjaan}}</td>
                                                    <td>{{$data->kategori_kelas}}</td>
                                                    <td>{{$data->kelas}}</td>
                                                    <td class="text-center">
                                                        <div class="form-button-action">
                                                            <a href="/onlineclass/{{$data->id}}/edit">
                                                            <!--<a href="#" class='open_modal_edit' id='{{$data->id}}'>-->
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-secondary btn-lg" data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                            </button></a>
                                                            <!--<a href="#" class='delete' id='{{$data->id}}'>-->
                                                            <a href="/onlineclass/{{$data->id}}/delete"onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Hapus">
                                                            <i class="fa fa-times"></i>
                                                            </button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div><br><br>
            </div>                   
        </div>
        <!--Tabel data end-->

		<!--Modal add data-->
											<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header no-bd">
															<h4 class="modal-title">
																<span class="fw-mediumbold">Pelatihan</span> 
																<span class="fw-light">Baru</span>
															</h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form method="post" action="/onlineclass/create" enctype="multipart/form-data">
																{{csrf_field()}}
																<div class="row">
																	<div class="col-sm-8">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Nama</label>
                                                                            <input name="nama" type="text" class="form-control" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Usia</label>
                                                                            <input name="usia" type="text" class="form-control" required="required">
                                                                        </div>
                                                                    </div>
																	<div class="col-sm-12">
																		<div class="form-group form-group-default">
																			<label>E-mail</label>
																			<input name="email" type="email" class="form-control" required="required">
																		</div>
																	</div>
																	<div class="col-md-12 pr-0">
																		<div class="form-group form-group-default">
																			<label>Pekerjaan</label>
																			<input name="pekerjaan" type="text" class="form-control">
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div class="form-group form-group-default">
																			<label>Kategori Kelas</label>
																			<select class="form-control" aria-label="Default select example" name="kategori_kelas">
																			  <option selected></option>
																			  <option>Online Free Class</option>
																			  <option>Online Paid Class</option>
																			  <option>Non Live Class</option>
																			  <option>Bootcamp Class</option>
																			  <option>Bundled Class</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div class="form-group form-group-default">
																			<label>Kelas</label>
																			<input type="text" name="kelas" class="form-control" placeholder="">
																		</div>
																	</div>
																</div>
															<div class="modal-footer no-bd">
																<input type="submit" class="btn btn-success" value="Submit">
																<input type="reset" class="btn btn-danger" value="Reset">
															</div>
															</form>
														</div>
													</div>
												</div>
											</div>
<!--Modal add data end-->

											<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											
											</div>
<!--==============================================MODAL TAMBAH PELATIHAN=========================================-->
											<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header no-bd">
															<h4 class="modal-title">
																<span class="fw-mediumbold">Konfirmasi</span>
															</h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<form name="delete_data" id="delete_data">
														<div class="modal-body">
															<h5 align="center" style="margin:0;">Apakah anda yakin menghapus data ini?</h5>
														</div>
														<div class="modal-footer">
															<button type="button" name="delete_button" id="delete_button" class="btn btn-danger" data-dismiss="modal">Delete</button>
															<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
														</div>
														</form>
													</div>
												</div>
											</div>
    @endsection



