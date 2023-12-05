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
 *  Date: 2021/01/19
 *  Time: 11:56:56
 */

?>
@extends('admin.layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Summernote
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
            <div class="card-footer">
                Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    CodeMirror
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <textarea id="codeMirrorDemo" class="p-3">
<div class="info-box bg-gradient-info">
  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Bookmarks</span>
    <span class="info-box-number">41,410</span>
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      70% Increase in 30 Days
    </span>
  </div>
</div>
              </textarea>
            </div>
            <div class="card-footer">
                Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
@endsection

@section('script-end')
<!-- Page specific script -->
<script>
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
@endsection