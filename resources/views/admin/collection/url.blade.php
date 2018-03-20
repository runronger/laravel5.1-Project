@extends('layouts.master')

@section('title','url采集')
@section('keywords','url采集')
@section('description','url采集测试')
@section('page','URL采集')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
            <div class="page-title">
                <span class="title">阿里巴巴中国站【1688】产品URL数据采集</span>
                <div class="description">Alibaba China Station【1688】Product URL Data Collection</div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="title">URL采集</div>
                            </div>
                        </div>
                        <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">url地址</label>
                                    <textarea class="form-control" id="content" placeholder="Enter url" style="height: 500px" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">进度:  5%</label>
                                    <div class="progress" style="height: 30px;">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" id="doJob" class="btn btn-info">处理</button>
                                    <button type="submit" id="download" class="btn btn-primary">下载</button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('javascript')
    @parent
    <!-- Javascript -->
    <script src="{{asset('/lib/layer/layer.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/app.js')}}"></script>
    <script>
        $("#doJob").click(function () {
            if($("#content").val() != ''){
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:"{{url('/admin/doUrlCollection')}}",
                    data:{'_token':'{{csrf_token()}}','content':$("#content").val()},
                    datatype:"json",
                    type:"POST",
                    beforeSend:function () {
                        $("#doJob").attr({disabled: "disabled" });
                    },
                    success:function (e) {

                    },
                    complete:function () {
                        $("#doJob").removeAttr("disabled")
                    }
                });
            }else {
                layer.msg('Url地址不能为空', {
                    icon: 2,
                    time: 2000
                });
                $("#content").focus();
                return false;
            }
        });
    </script>
    @endsection
