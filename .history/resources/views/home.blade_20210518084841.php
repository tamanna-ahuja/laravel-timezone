@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                       
<div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                            <div class="col-md-6">
                                
                            <input type="text" name="name" required>
                            
                            <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
  <option value="PHP">PHP</option>
  <option value="Laravel">Laravel</option>
  <option value="HTML">HTML</option>
  <option value="CSS">CSS</option>
  <option value="Jquery">Jquery</option>
  <option value="Shopify">Shopify</option>
  <option value="Magento">Magento</option>
  <option value="Wordpress">Wordpress</option>
  <option value="Joomla">Joomla</option>
  <option value="Opencart">Opencart</option>
</select>                                @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                            <div class="col-md-6">
                                
                            <input type="text" name="name" required>
                            
                            <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
  <option value="PHP">PHP</option>
  <option value="Laravel">Laravel</option>
  <option value="HTML">HTML</option>
  <option value="CSS">CSS</option>
  <option value="Jquery">Jquery</option>
  <option value="Shopify">Shopify</option>
  <option value="Magento">Magento</option>
  <option value="Wordpress">Wordpress</option>
  <option value="Joomla">Joomla</option>
  <option value="Opencart">Opencart</option>
</select>                                @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                            <div class="col-md-6">
                                
                            <input type="text" name="name" required>
                            
                            <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
  <option value="PHP">PHP</option>
  <option value="Laravel">Laravel</option>
  <option value="HTML">HTML</option>
  <option value="CSS">CSS</option>
  <option value="Jquery">Jquery</option>
  <option value="Shopify">Shopify</option>
  <option value="Magento">Magento</option>
  <option value="Wordpress">Wordpress</option>
  <option value="Joomla">Joomla</option>
  <option value="Opencart">Opencart</option>
</select>                                @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="timezone" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('timezone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@endsection
