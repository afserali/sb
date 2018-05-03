@extends('layouts.app')

@section('template_title')
    {{ Auth::user()->name }}'s Dahboard
@endsection

@section('template_fastload_css')
@endsection

@section('content')


        <div class="col-md-12">
           

                            
                
           
          
            
            <!--Content Section Start -->
           
                    <!-- Ratesection Div Start -->
                    <div class="ratesSection">
                        <div class="col-md-12">
                            <!-- FCl Lcl Tab Section Start -->
                            <ul class="fcllclHeading">
                                <li class="fclHeading">
                                    <span class="calend_back"></span>
                                    <div class="fclBox">
                                        <svg class="fclbox1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                            <image id="image0" width="25" height="25" x="0" y="0"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABGlBMVEX///8eMmUeMmUeMmUe
                                                MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmX///9GiiSbAAAAXHRSTlMAAYv2
                                                sJufmqelEB1Ud5eWlX5cJsvOjYiJiofF3Ov+5niA9WzgnpPo8MB08fteusJo8lDbf+NR7HG1xFnu
                                                Y7xtVo+D5Ha3xl/vXblnT3C0w4HhnJJu6v3P3piZ1wErDOAAAAABYktHRACIBR1IAAAAB3RJTUUH
                                                4gETAQIJorxx+QAAAMBJREFUKM9jYBgF5AJGJmYWVjY4YOdg5uRCkubm4eXjF4ADfnZBIWEkaRFR
                                                MXEJSXFJcQkJICEpIS4lLYMkLRuDAeSQpOVjFKRFFJWUVVTV1JU1JDRFtbR1UKR19fQNDI2MmUxM
                                                zcwtLK2sbVClbe2s7A0dZBydnB3MXVzd3D3oKO3ppe+t7WPMJGhqJuvr54/uNKDHApTsA4OC5UMw
                                                PRaKHB4QKgxJOjxClT8yio89MgpI8EVF8kVGBw50MhlQAACEdjfXbIQKxQAAACV0RVh0ZGF0ZTpj
                                                cmVhdGUAMjAxOC0wMS0xOVQwMTowMjowOS0wNzowMElwq8UAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
                                                MTgtMDEtMTlUMDE6MDI6MDktMDc6MDA4LRN5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJl
                                                YWR5ccllPAAAAABJRU5ErkJggg==" />
                                        </svg>
                                        <svg class="fclbox2" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                            <image id="image0" width="25" height="25" x="0" y="0"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAQAAACvSQD0AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElN
                                                RQfiARQEBRryX1yyAAABLklEQVQ4y+3SMU8UQRiH8d/s7i0JQkEiIUrOkMh3oNOPwAe5XElBSXu1
                                                vR/B3kZsKNCE3sLEhCMHFxIlh4Hd2x0bhD3dwohGEplq8maeeWf+7xOi31/JLdh7+D+Bs8Y+GOh5
                                                bTxT/b5Kiza90vP5Gmjo2bXhqTVRm7NB5tBH+z60we+k3igFQS1RC4gStUQURc+sWG+Dxx7+wkfj
                                                TU7NwEps2/Pejq/6PnnphWN9Xwy8dWDLmao9MDhyrjJSOVQ6NVEamho5lxk20Z9H1ZFIdJALMpmg
                                                c13PhT8257sDFyq1QnQpmipFpahQqRSz+vyY9qoFuccyT+SWzEl1dTyy4IFVafNwU5ITy62vizMZ
                                                1zcXNDsPTey6kAhq6ZWetVR1pWfw3Hx753+b9j38N+FvtjBZ6LF/zlsAAAAldEVYdGRhdGU6Y3Jl
                                                YXRlADIwMTgtMDEtMjBUMDQ6MDU6MjYtMDc6MDCMDyFhAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE4
                                                LTAxLTIwVDA0OjA1OjI2LTA3OjAw/VKZ3QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFk
                                                eXHJZTwAAAAASUVORK5CYII=" />
                                        </svg>
                                        <span class="fclText">FCL</span>
                                    </div>
                                </li>
                                <li class="lclHeading">
                                    <span class="calend_back1"></span>
                                    <div class="lclBox">
                                        <span class="cubeIcon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                        <span class="lclText">LCL</span>
                                    </div>
                                </li>
                            </ul>
                            <!-- FCl Lcl Tab Section End -->
                            <!-- Fcl Section Start -->
                            <div class="fclSection">
                                <div class="col-md-12">
                                    <h5 class="shippingHead">Shipping Details</h5>
                                </div>
                                <div class="inputSection">
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="origin" placeholder="Origin" id="departure">
                                            
                                            <input type="hidden"
								 id="departureIdOne" name="departureId" />

							<div id="auto-complete-dropdown-departure"></div>
							<span id="departureCountrySpan" style="display: none;"></span>
                                            <span class="input-group-addon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                    <image id="image0" width="25" height="25" x="0" y="0"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABCFBMVEX///8eMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmX///8+yhmbAAAAVnRSTlMACW3G68t0DQabqEz2W6WVLIr+tfQV
                                                        CtID/FBD+MUBZO+3dRvp8SOLmibm7i+RnlNUPN/oUTFaNwVufgQy5WAewdwRDzvUzSp8cHucycwz
                                                        EKnb+t6uE4F9Cz4AAAABYktHRACIBR1IAAAAB3RJTUUH4gETAAMMyg/eAAAAAMJJREFUKM/t0FcO
                                                        wjAMBuBAyx4tUGaBsil7773K3uD7H4XQ17oXQPySrUiflNgh5PdjMDKsyWzRUasNvrEbcHZQc9Jy
                                                        4ewG4HiPF3w4MyD4SYCFYAhlH4QjVjEKsTjKEkAiyQKk8MvTGXXybE5ns7zKst63FIpUS2U9jlco
                                                        V/G5CV+rN5rQEtu1DqJdudcnAxiS0ZiTtDyZ0ubnZrRHWlqeL8SlelitN4qWtzFQqrv94XiC8wV5
                                                        /Dq93YWH8/mS3uSfD9kcHwsxwDOsAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTAxLTE5VDAwOjAz
                                                        OjEyLTA3OjAwtYlNGgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0xOVQwMDowMzoxMi0wNzow
                                                        MMTU9aYAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="destination" placeholder="Desitination">
                                            <span class="input-group-addon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                    <image id="image0" width="25" height="25" x="0" y="0"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABCFBMVEX///8eMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmX///8+yhmbAAAAVnRSTlMACW3G68t0DQabqEz2W6WVLIr+tfQV
                                                        CtID/FBD+MUBZO+3dRvp8SOLmibm7i+RnlNUPN/oUTFaNwVufgQy5WAewdwRDzvUzSp8cHucycwz
                                                        EKnb+t6uE4F9Cz4AAAABYktHRACIBR1IAAAAB3RJTUUH4gETAAMMyg/eAAAAAMJJREFUKM/t0FcO
                                                        wjAMBuBAyx4tUGaBsil7773K3uD7H4XQ17oXQPySrUiflNgh5PdjMDKsyWzRUasNvrEbcHZQc9Jy
                                                        4ewG4HiPF3w4MyD4SYCFYAhlH4QjVjEKsTjKEkAiyQKk8MvTGXXybE5ns7zKst63FIpUS2U9jlco
                                                        V/G5CV+rN5rQEtu1DqJdudcnAxiS0ZiTtDyZ0ubnZrRHWlqeL8SlelitN4qWtzFQqrv94XiC8wV5
                                                        /Dq93YWH8/mS3uSfD9kcHwsxwDOsAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTAxLTE5VDAwOjAz
                                                        OjEyLTA3OjAwtYlNGgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0xOVQwMDowMzoxMi0wNzow
                                                        MMTU9aYAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="commodity" placeholder="Commodity">
                                            <span class="input-group-addon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                    <image id="image0" width="25" height="25" x="0" y="0"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABL1BMVEX///8eMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmX///8zBu2tAAAAY3RSTlMANDghMDwjNZaQQK+aTgSPwA4Ypz8BDBxHX32/pHRZIAImVGUkbAYb
                                                        T2cpKCs7NyIfMyon3fjs6fbu9/Hw7ergiY6eeaCCq2p1gVB+knB7bYdYhGFpc2aAkaKXhaiNsdbr
                                                        6NdqGn0oAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+IBEwASDe7RzYYAAADWSURBVCjPY2AYIoCRiZkF
                                                        jzQrExs7HmkmDk5WPNJc3Dy8eKT5+AUE8UgLsQqLYJcRFROXkJSSlpGV45UXVMCQVlRSVlLhk1RV
                                                        U9fQlNNCk9TW0dWT19fSkjfQ1lIxMNQ1MkaRNjE1M7ewtLSytrSysbWwszO1R5F2SOZxTHZyTnZx
                                                        hTLcUKTdkz00kz29kr3loAwfFGnfZD//5IDA5KBgKIODitIhyaFhyeG8yVKBUEYEijRncmRUsnB0
                                                        ckwslBGHIh2fYJaQaJ6QaAZG5gkJSQyjADcAAN9xOBZ22Z+IAAAAJXRFWHRkYXRlOmNyZWF0ZQAy
                                                        MDE4LTAxLTE5VDAwOjE4OjEzLTA3OjAwKpBimQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0x
                                                        OVQwMDoxODoxMy0wNzowMFvN2iUAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8
                                                        AAAAAElFTkSuQmCC" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="weight" placeholder="Weight">
                                            <span class="input-group-addon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                    <image id="image0" width="25" height="25" x="0" y="0"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABjFBMVEX///8eMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmX///994JQ/AAAAgnRSTlMAAlnJ
                                                        5eO4PwOF96qGtf1eU/hiAT0qj/Mtx6MHBAvVjIEpDHFtNom95Dd7Q4jInQnUjlf7W0TwNP5ydbfy
                                                        YF3F9rZBHcGNpqgTlKmkF5m7avEyD+lQxNIwoutCeU7gO7FNi3OC3vrXin5R/LoNtNjWQDPa3dwO
                                                        HBsWEWbLw8q/BWj1GdP/2gAAAAFiS0dEAIgFHUgAAAAHdElNRQfiARMAGARt4p2oAAABJ0lEQVQo
                                                        z2NgoAJgZGJmYWVjxyHLwcnFzcnDy8ePXVpAUEhYRFRYTFwCq7SkFAODtAyDrJw8VmkWBUUlZRVV
                                                        YTV1aWzSGpyaSlpa2hw62KV19cCUvoEhVsONjE0YTFVldMzMsXtMzULK0sraxhZXsNjZWzg4OuEM
                                                        NmFnPhclJVc3dyYPTy9vAQx5H2M2fV8LiyY//6Ymi4BAdGlnY78g5qYmDQuLYMGmphBs0qFNYeER
                                                        kVHRFk0x2KVj4+LFExJxSjclaTQl6zbhkuZLEUyNtcEhLdmUlp6RoeDV1JSJIZ2VnZPbJJgnl2/A
                                                        0tRUgCFt4cJR6FJUDAQl+cmM6NKlRTZMHkFl5UBQVhFUiRFsVU0O1fY1YBBaW4chXd+Q1igOBY0p
                                                        DMMcAADiTklf/53kewAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMS0xOVQwMDoyNDowNC0wNzow
                                                        MKBD2gYAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDEtMTlUMDA6MjQ6MDQtMDc6MDDRHmK6AAAA
                                                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="dimenIp">
                                            <input type="text" class="form-control" id="fclmodal" name="dimensions" placeholder="Dimensions" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="Date">
                                            <span class="input-group-addon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                    <image id="image0" width="25" height="25" x="0" y="0"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                        AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABdFBMVEX///8eMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                        MmUeMmUeMmUeMmUeMmX///8V77xUAAAAenRSTlMALs/3ogkInNMzfthv8iX0ctKGRITLqR7ip+ck
                                                        oYVI3/4f4+ma0Yn1i83o5Pz49vr75expHJsieCCURWHtQRaBUFgXOes6X0I+h6R3oG6/cLruARqD
                                                        UVl7G+pTWj2Pwnx6qq2+cSpOni8tf5hPaj8TVBQ2fUBcqIrxpkEIfx0AAAABYktHRACIBR1IAAAA
                                                        B3RJTUUH4gETABsunXQHvQAAASxJREFUKM9jYBjpgJGJmYWVgYGNnZmDE4s0FzcPLyMDAx+/gKAQ
                                                        hqSwiKiYuISkiAiLlLQMk6wcmrS8QhWLopICEChLq1QpKKFJS1VVqaqpVwEBs4ZmVZUWmrS2jrpO
                                                        la6evr4ec5WOuoEhmrSRsYmwqZm4gLm4haWVibUymrSNLYOdPQODgyMDg7kTgzO6tAuXq5uYu4en
                                                        hoetl5urN7rdyj6+nn7+PF6SPP4Bnr4q6NKBwkHBIUFBoWFBQeERQa6R6HZbMUSEMDBERTMwhJsw
                                                        xKBLK0uax8bFJyQmJcQnx5qzoBvukpKalp6RmZCVmZGdk5qL7vLAPIb8LAaGtAIGBu9ChiJ0w/mL
                                                        S0rL3G1ly23dWUptvXnRpH0qtCJdtLQiI8G4opKEhDIkAQDbhDkTTIHbugAAACV0RVh0ZGF0ZTpj
                                                        cmVhdGUAMjAxOC0wMS0xOVQwMDoyNzo0Ni0wNzowMFihftYAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
                                                        MTgtMDEtMTlUMDA6Mjc6NDYtMDc6MDAp/MZqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJl
                                                        YWR5ccllPAAAAABJRU5ErkJggg==" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="serviceSection">
                                    <!-- <div class="col-md-9"> -->
                                        <!-- <div class="col-md-12"> -->
                                            <!-- <h5 class="addServHead">Additional Services</h5> -->
                                        <!-- </div> -->
                                        <!-- <ul class="sbServices"> -->
                                            <!-- <li class="clearanceList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Clearance</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="transportList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Transport</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="warehouseList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Warehouse</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="exworksList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Ex Works</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                        <!-- </ul> -->
                                    <!-- </div> -->
                                    <div class="col-md-12 searchCol">
                                        <div class="col-md-12">
                                            <p class="totalText">
                                                <span class="totalTitle">Total&nbsp;:&nbsp;</span>
                                                <span class="totalAmt">2 Containers</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn searchBtn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fcl Section End -->	
                            <!-- Lcl Section Start -->
                            <div class="lclSection">
                                <div class="col-md-12">
                                    <h5 class="shippingHead">Shipping Details</h5>
                                </div>
                                <div class="inputSection">
                                    <!-- <div class="col-md-6" style="padding:0px;"> -->
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="origin" placeholder="Origin">
                                                <span class="input-group-addon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                        <image id="image0" width="25" height="25" x="0" y="0"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABCFBMVEX///8eMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmX///8+yhmbAAAAVnRSTlMACW3G68t0DQabqEz2W6WVLIr+tfQV
                                                            CtID/FBD+MUBZO+3dRvp8SOLmibm7i+RnlNUPN/oUTFaNwVufgQy5WAewdwRDzvUzSp8cHucycwz
                                                            EKnb+t6uE4F9Cz4AAAABYktHRACIBR1IAAAAB3RJTUUH4gETAAMMyg/eAAAAAMJJREFUKM/t0FcO
                                                            wjAMBuBAyx4tUGaBsil7773K3uD7H4XQ17oXQPySrUiflNgh5PdjMDKsyWzRUasNvrEbcHZQc9Jy
                                                            4ewG4HiPF3w4MyD4SYCFYAhlH4QjVjEKsTjKEkAiyQKk8MvTGXXybE5ns7zKst63FIpUS2U9jlco
                                                            V/G5CV+rN5rQEtu1DqJdudcnAxiS0ZiTtDyZ0ubnZrRHWlqeL8SlelitN4qWtzFQqrv94XiC8wV5
                                                            /Dq93YWH8/mS3uSfD9kcHwsxwDOsAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTAxLTE5VDAwOjAz
                                                            OjEyLTA3OjAwtYlNGgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0xOVQwMDowMzoxMi0wNzow
                                                            MMTU9aYAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="destination" placeholder="Desitination">
                                                <span class="input-group-addon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                        <image id="image0" width="25" height="25" x="0" y="0"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABCFBMVEX///8eMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmX///8+yhmbAAAAVnRSTlMACW3G68t0DQabqEz2W6WVLIr+tfQV
                                                            CtID/FBD+MUBZO+3dRvp8SOLmibm7i+RnlNUPN/oUTFaNwVufgQy5WAewdwRDzvUzSp8cHucycwz
                                                            EKnb+t6uE4F9Cz4AAAABYktHRACIBR1IAAAAB3RJTUUH4gETAAMMyg/eAAAAAMJJREFUKM/t0FcO
                                                            wjAMBuBAyx4tUGaBsil7773K3uD7H4XQ17oXQPySrUiflNgh5PdjMDKsyWzRUasNvrEbcHZQc9Jy
                                                            4ewG4HiPF3w4MyD4SYCFYAhlH4QjVjEKsTjKEkAiyQKk8MvTGXXybE5ns7zKst63FIpUS2U9jlco
                                                            V/G5CV+rN5rQEtu1DqJdudcnAxiS0ZiTtDyZ0ubnZrRHWlqeL8SlelitN4qWtzFQqrv94XiC8wV5
                                                            /Dq93YWH8/mS3uSfD9kcHwsxwDOsAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTAxLTE5VDAwOjAz
                                                            OjEyLTA3OjAwtYlNGgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0xOVQwMDowMzoxMi0wNzow
                                                            MMTU9aYAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="commodity" placeholder="Commodity">
                                                <span class="input-group-addon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                        <image id="image0" width="25" height="25" x="0" y="0"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABL1BMVEX///8eMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmX///8zBu2tAAAAY3RSTlMANDghMDwjNZaQQK+aTgSPwA4Ypz8BDBxHX32/pHRZIAImVGUkbAYb
                                                            T2cpKCs7NyIfMyon3fjs6fbu9/Hw7ergiY6eeaCCq2p1gVB+knB7bYdYhGFpc2aAkaKXhaiNsdbr
                                                            6NdqGn0oAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+IBEwASDe7RzYYAAADWSURBVCjPY2AYIoCRiZkF
                                                            jzQrExs7HmkmDk5WPNJc3Dy8eKT5+AUE8UgLsQqLYJcRFROXkJSSlpGV45UXVMCQVlRSVlLhk1RV
                                                            U9fQlNNCk9TW0dWT19fSkjfQ1lIxMNQ1MkaRNjE1M7ewtLSytrSysbWwszO1R5F2SOZxTHZyTnZx
                                                            hTLcUKTdkz00kz29kr3loAwfFGnfZD//5IDA5KBgKIODitIhyaFhyeG8yVKBUEYEijRncmRUsnB0
                                                            ckwslBGHIh2fYJaQaJ6QaAZG5gkJSQyjADcAAN9xOBZ22Z+IAAAAJXRFWHRkYXRlOmNyZWF0ZQAy
                                                            MDE4LTAxLTE5VDAwOjE4OjEzLTA3OjAwKpBimQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wMS0x
                                                            OVQwMDoxODoxMy0wNzowMFvN2iUAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8
                                                            AAAAAElFTkSuQmCC" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                    <!-- <div class="col-md-6"style="padding:0px;"> -->
                                        <!-- <div class="col-md-2"> -->
                                            <!-- <div class="input-group"> -->
                                                <!-- <input type="text" class="form-control" name="weight" placeholder="CBM"> -->
                                                <!-- <span class="input-group-addon cbmIp"> -->
                                                    <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve"> -->
                                                        <!-- <image id="image0" width="25" height="25" x="0" y="0" -->
                                                            <!-- xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN -->
                                                            <!-- AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABjFBMVEX///8eMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe -->
                                                            <!-- MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmX///994JQ/AAAAgnRSTlMAAlnJ -->
                                                            <!-- 5eO4PwOF96qGtf1eU/hiAT0qj/Mtx6MHBAvVjIEpDHFtNom95Dd7Q4jInQnUjlf7W0TwNP5ydbfy -->
                                                            <!-- YF3F9rZBHcGNpqgTlKmkF5m7avEyD+lQxNIwoutCeU7gO7FNi3OC3vrXin5R/LoNtNjWQDPa3dwO -->
                                                            <!-- HBsWEWbLw8q/BWj1GdP/2gAAAAFiS0dEAIgFHUgAAAAHdElNRQfiARMAGARt4p2oAAABJ0lEQVQo -->
                                                            <!-- z2NgoAJgZGJmYWVjxyHLwcnFzcnDy8ePXVpAUEhYRFRYTFwCq7SkFAODtAyDrJw8VmkWBUUlZRVV -->
                                                            <!-- YTV1aWzSGpyaSlpa2hw62KV19cCUvoEhVsONjE0YTFVldMzMsXtMzULK0sraxhZXsNjZWzg4OuEM -->
                                                            <!-- NmFnPhclJVc3dyYPTy9vAQx5H2M2fV8LiyY//6Ymi4BAdGlnY78g5qYmDQuLYMGmphBs0qFNYeER -->
                                                            <!-- kVHRFk0x2KVj4+LFExJxSjclaTQl6zbhkuZLEUyNtcEhLdmUlp6RoeDV1JSJIZ2VnZPbJJgnl2/A -->
                                                            <!-- 0tRUgCFt4cJR6FJUDAQl+cmM6NKlRTZMHkFl5UBQVhFUiRFsVU0O1fY1YBBaW4chXd+Q1igOBY0p -->
                                                            <!-- DMMcAADiTklf/53kewAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMS0xOVQwMDoyNDowNC0wNzow -->
                                                            <!-- MKBD2gYAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDEtMTlUMDA6MjQ6MDQtMDc6MDDRHmK6AAAA -->
                                                            <!-- GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" /> -->
                                                    <!-- </svg> -->
                                                <!-- </span> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="weight" placeholder="Weight">
                                                <span class="input-group-addon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                        <image id="image0" width="25" height="25" x="0" y="0"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABjFBMVEX///8eMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmX///994JQ/AAAAgnRSTlMAAlnJ
                                                            5eO4PwOF96qGtf1eU/hiAT0qj/Mtx6MHBAvVjIEpDHFtNom95Dd7Q4jInQnUjlf7W0TwNP5ydbfy
                                                            YF3F9rZBHcGNpqgTlKmkF5m7avEyD+lQxNIwoutCeU7gO7FNi3OC3vrXin5R/LoNtNjWQDPa3dwO
                                                            HBsWEWbLw8q/BWj1GdP/2gAAAAFiS0dEAIgFHUgAAAAHdElNRQfiARMAGARt4p2oAAABJ0lEQVQo
                                                            z2NgoAJgZGJmYWVjxyHLwcnFzcnDy8ePXVpAUEhYRFRYTFwCq7SkFAODtAyDrJw8VmkWBUUlZRVV
                                                            YTV1aWzSGpyaSlpa2hw62KV19cCUvoEhVsONjE0YTFVldMzMsXtMzULK0sraxhZXsNjZWzg4OuEM
                                                            NmFnPhclJVc3dyYPTy9vAQx5H2M2fV8LiyY//6Ymi4BAdGlnY78g5qYmDQuLYMGmphBs0qFNYeER
                                                            kVHRFk0x2KVj4+LFExJxSjclaTQl6zbhkuZLEUyNtcEhLdmUlp6RoeDV1JSJIZ2VnZPbJJgnl2/A
                                                            0tRUgCFt4cJR6FJUDAQl+cmM6NKlRTZMHkFl5UBQVhFUiRFsVU0O1fY1YBBaW4chXd+Q1igOBY0p
                                                            DMMcAADiTklf/53kewAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMS0xOVQwMDoyNDowNC0wNzow
                                                            MKBD2gYAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDEtMTlUMDA6MjQ6MDQtMDc6MDDRHmK6AAAA
                                                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="dimenIp">
                                                <input type="text" class="form-control" id="myBtn" name="dimensions" placeholder="Dimensions" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="date" placeholder="Date">
                                                <span class="input-group-addon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
                                                        <image id="image0" width="25" height="25" x="0" y="0"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAgCAMAAAAynjhNAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABdFBMVEX///8eMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUeMmUe
                                                            MmUeMmUeMmUeMmUeMmX///8V77xUAAAAenRSTlMALs/3ogkInNMzfthv8iX0ctKGRITLqR7ip+ck
                                                            oYVI3/4f4+ma0Yn1i83o5Pz49vr75expHJsieCCURWHtQRaBUFgXOes6X0I+h6R3oG6/cLruARqD
                                                            UVl7G+pTWj2Pwnx6qq2+cSpOni8tf5hPaj8TVBQ2fUBcqIrxpkEIfx0AAAABYktHRACIBR1IAAAA
                                                            B3RJTUUH4gETABsunXQHvQAAASxJREFUKM9jYBjpgJGJmYWVgYGNnZmDE4s0FzcPLyMDAx+/gKAQ
                                                            hqSwiKiYuISkiAiLlLQMk6wcmrS8QhWLopICEChLq1QpKKFJS1VVqaqpVwEBs4ZmVZUWmrS2jrpO
                                                            la6evr4ec5WOuoEhmrSRsYmwqZm4gLm4haWVibUymrSNLYOdPQODgyMDg7kTgzO6tAuXq5uYu4en
                                                            hoetl5urN7rdyj6+nn7+PF6SPP4Bnr4q6NKBwkHBIUFBoWFBQeERQa6R6HZbMUSEMDBERTMwhJsw
                                                            xKBLK0uax8bFJyQmJcQnx5qzoBvukpKalp6RmZCVmZGdk5qL7vLAPIb8LAaGtAIGBu9ChiJ0w/mL
                                                            S0rL3G1ly23dWUptvXnRpH0qtCJdtLQiI8G4opKEhDIkAQDbhDkTTIHbugAAACV0RVh0ZGF0ZTpj
                                                            cmVhdGUAMjAxOC0wMS0xOVQwMDoyNzo0Ni0wNzowMFihftYAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
                                                            MTgtMDEtMTlUMDA6Mjc6NDYtMDc6MDAp/MZqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJl
                                                            YWR5ccllPAAAAABJRU5ErkJggg==" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <div class="serviceSection">
                                    <!-- <div class="col-md-9"> -->
                                        <!-- <div class="col-md-12"> -->
                                            <!-- <h5 class="addServHead">Additional Services</h5> -->
                                        <!-- </div> -->
                                        <!-- <ul class="sbServices"> -->
                                            <!-- <li class="clearanceList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Clearance</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="transportList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Transport</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="warehouseList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Warehouse</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                            <!-- <li class="exworksList"> -->
                                                <!-- <label class="radio-inline" id=""> -->
                                                <!-- <input type="checkbox"  name="" value=""><span class="label-text">Ex Works</span> -->
                                                <!-- </label> -->
                                            <!-- </li> -->
                                        <!-- </ul> -->
                                    <!-- </div> -->
                                    <div class="col-md-12 searchCol">
                                        <div class="col-md-12">
                                            <p class="totalText">
                                                <span class="totalTitle">Total&nbsp;:&nbsp;</span>
                                                <span class="totalAmt">2 boxes, 0 CBM</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn searchBtn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Lcl Section Start -->
                        </div>
                        <div>
                       
                   
                    <!-- Ratesection Div Start -->
               
            <!--Content Section Start-->
        </div>
        </div>
        <!-- Modal Section Start-->
        <!-- FCL Modal Start -->
        <div class="modal fade" id="myfclModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Load Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="fclinput_fields_wrap">
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-2 col-sm-2">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="number" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="input-group">
                                        <select>
                                            <option>Standard</option>
                                            <option>Standard1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="input-group boxDiv">
                                        <span class="contBox">20'</span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="input-group boxDiv">
                                        <span class="contBox1">40'</span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="input-group boxDiv">
                                        <span class="contBox2">45' HC</span>
                                    </div>
                                </div>
                                <div class="col-md-1 col-md-1">
                                    <span class="fcladdIcon">
                                    <button class="fcladd_field_button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <span class="lclpopTot">
                            <span class="lclpopTottxt">Total : </span>
                            <span class="lclpopTotAmt">2 Containers </span>
                            </span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <button class="btn applyBtn">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FCL Modal End -->
        <!--LCL Modal start-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Load Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="radioCalc">
                            <label class="radio-inline">
                            <input type="radio" name="calc" id="" value="cm" checked><span class="label-text">CM</span>
                            </label>
                            <!-- <label class="radio-inline"> -->
                            <!-- <input type="radio" name="calc" id="" value="cm"><span class="label-text">INCH</span> -->
                            <!-- </label> -->
                        </div>
                        <div class="input_fields_wrap">
                            <div class="col-md-10 col-sm-10">
                                <div class="col-md-3 col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="length" placeholder="Length">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="width" placeholder="Width">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="height" placeholder="Height">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="noofboxes" placeholder="No. of Boxes">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-2 addCol">
                                <span class="addIcon">
                                <button class="add_field_button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                </span>
                                <span class="totCol">
                                <span>Total :</span>
                                <span>2 Boxes, 0 CBM</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <span class="lclpopTot">
                            <span class="lclpopTottxt">Total : </span>
                            <span class="lclpopTotAmt">2 Boxes, 0 CBM </span>
                            </span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <button class="btn applyBtn">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Section End-->
        <!-- Sidebar Menu start -->
        <script src="user/js/jquery-1.12.3.min.js"></script>
        <script src="user/js/bootstrap.min.js"></script>
        <script src="user/js/sidebar.js"></script>
        <script>
            $('#wrapper').sidebar();
        </script>
        <!-- Sidebar Menu end -->
        <script type="text/javascript">jssor_1_slider_init();</script>
        <script src="user/js/ratesSection.js"></script>

            </div>
        </div>
    </div>
	
@endsection

@section('footer_scripts')
@endsection