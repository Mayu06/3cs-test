@extends('layouts.app')

@section('content')

<div class="col-lg-8"> 


    <div class="container-fluid view-book-container">

                    <div class="card book">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Adding New Books') 


                        }}</div></strong></h4>

                        <div class="card-body">

                    <form method="post" action="/lostvehicle" enctype="multipart/form-data">
                        {{csrf_field()}}

                                <div class="form-group row">
                                    <label for="book_name" class="col-md-4 col-form-label text-md-right">{{ __('Book Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="book_name" type="text" class="form-control @error('book_name') is-invalid @enderror" name="book_name" value="{{ old('book_name') }}" required autocomplete="book_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="book_author" class="col-md-4 col-form-label text-md-right">{{ __('Book Author ') }}</label>

                                    <div class="col-md-6">
                                        <input id="book_author" type="text" class="form-control @error('book_author') is-invalid @enderror" name="book_author" value="{{ old('book_author') }}" required autocomplete="book_author" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="publish_year" class="col-md-4 col-form-label text-md-right">{{ __('Year of Publishing ') }}</label>

                                    <div class="col-md-6">
                                        <input id="publish_year" type="text" class="form-control @error('publish_year') is-invalid @enderror" name="publish_year" value="{{ old('publish_year') }}" required autocomplete="publish_year" autofocus>
                                    </div>
                                </div>


                                <div class="input-append date form_datetime">
                                    <input id="datetime" size="16" type="text" value="" readonly>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                 
                                <script type="text/javascript">
                                    $("#datetime").datepicker({
                                        format: "dd MM yyyy - hh:ii"
                                    });
                                </script>  

                                                                
                                <div class="form-group row">
                                    <label for="book_price" class="col-md-4 col-form-label text-md-right">{{ __('Book Price') }}</label>

                                    <div class="col-md-6">
                                        <input id="book_price" type="number" step="any" class="form-control @error('book_price') is-invalid @enderror" name="book_price" value="{{ old('book_price') }}" required autocomplete="book_price">

                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                                    <div class="col-md-6">
                                        <input id="isbn" type="number" step="any" class="form-control @error('book_price') is-invalid @enderror" name="isbn" value="{{ old('isbn') }}" required autocomplete="isbn">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="book_author" class="col-md-4 col-form-label text-md-right">{{ __('Book Category ') }}</label>

                                    <div class="col-md-6">
                                        <input id="book_author" type="text" class="form-control @error('book_author') is-invalid @enderror" name="book_author" value="{{ old('book_author') }}" required autocomplete="book_author" autofocus>
                                    </div>
                                </div>


						<div class="form-group row">
							<label for="book_author" class="col-md-4 col-form-label text-md-right">{{ __('Book Category ') }}</label>
							<div class="col-md-6">
						   <div class="dropdown">
						  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Select the Book Category
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Science</a>
						    <a class="dropdown-item" href="#">Classics</a>
						    <a class="dropdown-item" href="#">Short Stories</a>
						  </div>
						</div>
						</div>
						</div>

						<div class="form-group row">
							<label for="book_author" class="col-md-4 col-form-label text-md-right">{{ __('Book Language ') }}</label>
							<div class="col-md-6">
						   <div class="dropdown">
						  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Select the Language
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Sinhala</a>
						    <a class="dropdown-item" href="#">English</a>
						    <a class="dropdown-item" href="#">Tamil</a>
						  </div>
						</div>
						</div>
						</div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Book Image') }}</label>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" name="cover_image">

                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>


                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-9">
                               
                              <h4><button type="submit" class="btn btn-info rounded">

                                {{ __('Add') }}
                            </button></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>


</div>


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> 
</main>
</div>

@endsection