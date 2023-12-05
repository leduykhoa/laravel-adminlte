<?php
/*
 *  ............(¯`'•.
 *  ..............(¯'•(¯'•............_/)/)
 *  ...............(¯'•.(¯'•.......((.....((
 *  ................(¯`'•(¯'•...((.)..(. ‘ /)
 *  .................(¯`'•.(¯'((.)....|\_/
 *  .....,,,~”¯¯¯`'¯(_¸´(_.)......|
 *  ...(((./...........................)__
 *  ..((((.\......),,...........(...../__`\
 *  ..))))..\ . .//...¯¯¯¯¯¯¯' \.../... / /
 *  .(((...../ .// .............. | ./...../
 *  .))).....| ||.................| |...........♥♥♥
 *  ((........) \.................) \...........\|/
 *  .^^^^.""'"'.^^^^^^^..""".^^^^.""""
 *  ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°)
 *  ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦
 *  
 *  Copyright © 2009-2021 Lê Duy Khoa. All rights reserved.
 *  Mail: leduykhoa060690@gmail.com
 *  Skype: leduykhoa060690
 *  Website: http://web-fast.com
 *  Mobile: +84973421508
 *  Date: 2021/01/20
 *  Time: 05:59:51
 */

?>
@extends('admin.layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="simple-results.html">
                <div class="input-group input-group-lg">
                    <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="Lorem ipsum">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-10 offset-md-1">
            <div class="list-group">
                <div class="list-group-item">
                    <div class="row">
                        <div class="col px-4">
                            <div>
                                <div class="float-right">2020-04-20 04:04pm</div>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img-fluid" src="/images/photo1.png" alt="Photo" style="max-height: 160px;">
                        </div>
                        <div class="col px-4">
                            <div>
                                <div class="float-right">2020-04-20 10:14pm</div>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="row">
                        <div class="col-auto">
                            <iframe width="240" height="160" src="https://www.youtube.com/embed/WEkSYw3o5is?controls=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="border-0" allowfullscreen></iframe>
                        </div>
                        <div class="col px-4">
                            <div>
                                <div class="float-right">2020-04-20 11:54pm</div>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-end')
<!-- Page specific script -->
<script>
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {})
</script>
@endsection