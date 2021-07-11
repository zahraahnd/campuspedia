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
											<h2>Edit Data</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	        <div class="container">
	            <div class="row">
	            	<div class="col-lg-12">
	            	<form method="post" action="/onlineclass/{{$data->id}}/update" enctype="multipart/form-data">
																{{csrf_field()}}
																<div class="row">
																	<div class="col-sm-8">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Nama</label>
                                                                            <input name="nama" type="text" class="form-control" required="required" value="{{$data->nama}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Usia</label>
                                                                            <input name="usia" type="text" class="form-control" required="required" value="{{$data->usia}}">
                                                                        </div>
                                                                    </div>
																	<div class="col-sm-12">
																		<div class="form-group form-group-default">
																			<label>E-mail</label>
																			<input name="email" type="email" class="form-control" required="required" value="{{$data->email}}">
																		</div>
																	</div>
																	<div class="col-md-12 pr-0">
																		<div class="form-group form-group-default">
																			<label>Pekerjaan</label>
																			<input name="pekerjaan" type="text" class="form-control" value="{{$data->pekerjaan}}">
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div class="form-group form-group-default">
																			<label>Kategori Kelas</label>
																			<select class="form-control" aria-label="Default select example" name="kategori_kelas">
																			  <option @if($data->kategori_kelas == 'Online Free Class') selected @endif>Online Free Class</option>
																			  <option @if($data->kategori_kelas == 'Online Paid Class') selected @endif>Online Paid Class</option>
																			  <option @if($data->kategori_kelas == 'Non Live Class') selected @endif>Non Live Class</option>
																			  <option @if($data->kategori_kelas == 'Bootcamp Class') selected @endif>Bootcamp Class</option>
																			  <option @if($data->kategori_kelas == 'Bundled Class') selected @endif>Bundled Class</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-12">
																		<div class="form-group form-group-default">
																			<label>Kelas</label>
																			<input type="text" name="kelas" class="form-control" placeholder="" value="{{$data->kelas}}">
																		</div>
																	</div>
																</div>
																<input type="submit" class="btn btn-success" value="Update">
																<input type="reset" class="btn btn-danger" value="Reset">
															</form>

                	</div>
                </div><br><br>
            </div>

  @endsection
