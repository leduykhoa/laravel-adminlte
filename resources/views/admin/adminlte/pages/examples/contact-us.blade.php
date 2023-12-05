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
 *  Time: 06:23:38
 */

?>
@extends('admin.layouts.default')

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
                <h2>Admin<strong>LTE</strong></h2>
                <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
                    Phone: +1 234 56789012
                </p>
            </div>
        </div>
        <div class="col-7">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
                <label for="inputEmail">E-Mail</label>
                <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
                <label for="inputMessage">Message</label>
                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send message">
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