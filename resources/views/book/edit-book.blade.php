@extends('layouts.app')

@section('content')

<div class="col-lg-8"> 


    <div class="container-fluid book-container">

                    <div class="book-item">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Book Edit') }}</div></strong></h4>

                        <div class="card-body">

                    
                        <form method="post" action="{{action('bookController@update', $id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                      <input type="hidden" name="_method" value="PATCH"/>
                      
                                <div class="form-group row">
                                    <label for="item_own_name" class="col-md-4 col-form-label text-md-right">{{__('Book Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="item_own_name" type="text" class="form-control @error('item_own_name') is-invalid @enderror" name="item_own_name" value="{{$item->owner_name}}" required autocomplete="item_own_name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item_name" class="col-md-4 col-form-label text-md-right">{{ __('Item Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{$item->item_name}}" required autocomplete="item_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$item->address}}" required autocomplete="email">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                  
                                    <div class="col-md-6">
                                        <input id="address" type="text" name="phone_number" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$item->phone_no}}" required autocomplete="email">
                                    </div>
                                </div>


                              



                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                   
                                <div class="col-md-6">
                            <input name="cover_image" type="file" value="{{$item->image}}">
                        </div>
                            </div>



                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-8">
                                    <div class="form-group">
                                      
                             <!--<textarea class="form-control" id="exampleFormControlTextarea3" type="textarea" rows="7" name="description" <?php echo $item->description?> ></textarea>-->

                              <textarea name="description" class="form-control" type="textarea" rows="7"> <?php echo $item->description?> </textarea>

                                    
                                  </div>
                                  
                              </div>
                          </div>



                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-9">
                               
                              <h4><button type="Submit" class="btn btn-info rounded">

                                {{ __('Submit') }}
                            </button></h4>
                        </div>
                    </div>
                </form>
   
</div>
</div>
</div>
</div>


<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</main>
</div>

@endsection