@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Moderator {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-md-12">
                    <div style="height:80px; background-color:#A154FF; ">
                        <img src="/storage/moderator_image/smallOrgOnPurp.png" width="80px" height="80px" />
                    </div>
                </div>

                
                <div class="buttons">
                    <div class="col-md-12">
                        <a href="http://www.google.com" target="_blank">
                        delete<img src="/storage/moderator_image/delete.svg" width="100px" height="100px" />
                        </a>

                        <a href="http://www.google.com" target="_blank">
                        top<img src="/storage/moderator_image/top.svg" width="100px" height="100px" />
                        </a>

                        <a href="http://www.google.com" target="_blank">
                        hide<img src="/storage/moderator_image/hide.svg" width="100px" height="100px" />
                        </a>

                        <a href="http://www.google.com" target="_blank">
                        edit<img src="/storage/moderator_image/edit.svg" width="100px" height="100px" />
                        </a>

                        <a href="http://www.google.com" target="_blank">
                        select all<img src="/storage/moderator_image/select_all.svg" width="100px" height="100px" />
                        </a>

                        <a href="http://www.google.com" target="_blank">
                        clear<img src="/storage/moderator_image/clear.svg" width="100px" height="100px" />
                        </a>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="comments">

                            <div style="background-color:#45FF02;">
                                <input type="checkbox" id="check1" name="check1" value="check1">
                                <label for="line1"> Line1 </label><br>

                                <input type="checkbox" id="check2" name="check2" value="check2">
                                <label for="line2"> Line2 </label><br>
                            </div>
                            <input type="checkbox" id="check3" name="check3" value="check3">
                            <label for="line3"> Line3 </label><br>

                            <input type="checkbox" id="check4" name="check4" value="check4">
                            <label for="line4"> Line4 </label><br>

                            <div style="background-color:#45FF02;">
                                <input type="checkbox" id="check5" name="check5" value="check5">
                                <label for="line5"> Line5 </label><br>

                                <input type="checkbox" id="check6" name="check6" value="check6">
                                <label for="line6"> Line6 </label><br>
                            </div>
                            <input type="checkbox" id="check7" name="check7" value="check7">
                            <label for="line7"> Line7 </label><br>

                            <input type="checkbox" id="check8" name="check8" value="check8">
                            <label for="line8"> Line8 </label><br>
                            </div>
                        </div>

                    <div class="pages" style="background-color:#FFE523">
                        <div class="col-md-12">
                            <a href="http://www.google.com" target="_blank">
                            <img src="/storage/moderator_image/before.svg" />
                            </a>
                            1
                            <a href="http://www.google.com" target="_blank">
                            <img src="/storage/moderator_image/next.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
