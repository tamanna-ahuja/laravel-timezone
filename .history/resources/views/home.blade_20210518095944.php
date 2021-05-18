<?php

use Illuminate\Support\Facades\Auth;
?>
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
                    <form method="POST" action="{{route('users.store') }}">
                        @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{Auth::user()->name}}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                            <div class="col-md-6">
                            <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
  <option value="PHP" <?= (in_array('PHP',$skills) ? 'selected="selected"' : ""); ?>>PHP</option>
  <option value="Laravel" <?= (in_array('Laravel',$skills) ? 'selected="selected"' : ""); ?>>Laravel</option>
  <option value="HTML" <?= (in_array('HTML',$skills) ? 'selected="selected"' : ""); ?>>HTML</option>
  <option value="CSS" <?= (in_array('CSS',$skills) ? 'selected="selected"' : ""); ?>>CSS</option>
  <option value="Jquery" <?= (in_array('Jquery',$skills) ? 'selected="selected"' : ""); ?>>Jquery</option>
  <option value="Shopify" <?= (in_array('Shopify',$skills) ? 'selected="selected"' : ""); ?>>Shopify</option>
  <option value="Magento" <?= (in_array('Magento',$skills) ? 'selected="selected"' : ""); ?>>Magento</option>
  <option value="Wordpress" <?= (in_array('Wordpress',$skills) ? 'selected="selected"' : ""); ?>>Wordpress</option>
  <option value="Joomla" <?= (in_array('Joomla',$skills) ? 'selected="selected"' : ""); ?>>Joomla</option>
  <option value="Opencart" <?= (in_array('Opencart',$skills) ? 'selected="selected"' : ""); ?>>Opencart</option>
</select>                                @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="timezone" class="col-md-4 col-form-label text-md-right">{{ __('Timezone') }}</label>

                            <div class="col-md-6">
                                
                            
                            <select class="form-control" id="timezone" name="timezone">
<option value="Etc/GMT+12" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-12:00) International Date Line West</option>
   <option value="Pacific/Midway" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-11:00) Midway Island, Samoa</option>
   <option value="Pacific/Honolulu" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-10:00) Hawaii</option>
   <option value="US/Alaska" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-09:00) Alaska</option>
   <option value="America/Los_Angeles" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-08:00) Pacific Time (US & Canada)</option>
   <option value="America/Tijuana" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-08:00) Tijuana, Baja California</option>
   <option value="US/Arizona" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-07:00) Arizona</option>
   <option value="America/Chihuahua" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
   <option value="US/Mountain" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-07:00) Mountain Time (US & Canada)</option>
   <option value="America/Managua" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-06:00) Central America</option>
   <option value="US/Central" <?= (Auth::user()->timezone ? 'selected="selected"' : ""); ?>>(GMT-06:00) Central Time (US & Canada)</option>
   <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
   <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
   <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
   <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
   <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
   <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
   <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
   <option value="America/Manaus">(GMT-04:00) Manaus</option>
   <option value="America/Santiago">(GMT-04:00) Santiago</option>
   <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
   <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
   <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
   <option value="America/Godthab">(GMT-03:00) Greenland</option>
   <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
   <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
   <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
   <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
   <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
   <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
   <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
   <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
   <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
   <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
   <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
   <option value="Asia/Amman">(GMT+02:00) Amman</option>
   <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
   <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
   <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
   <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
   <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
   <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
   <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
   <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
   <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
   <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
   <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
   <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
   <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
   <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
   <option value="Asia/Baku">(GMT+04:00) Baku</option>
   <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
   <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
   <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
   <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
   <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
   <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
   <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
   <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
   <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
   <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
   <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
   <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
   <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
   <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
   <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
   <option value="Australia/Perth">(GMT+08:00) Perth</option>
   <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
   <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
   <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
   <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
   <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
   <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
   <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
   <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
   <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
   <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
   <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
   <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
   <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
   <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
   <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
</select>	                    @error('timezone')
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
