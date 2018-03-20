@extends('layouts.master')

@section('title','url采集')
@section('keywords','url采集')
@section('description','url采集测试')
@section('page','URL采集')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
            <div class="page-title">
                <span class="title">阿里巴巴中国站【1688】产品店铺数据采集</span>
                <div class="description">Alibaba China Station【1688】Product Store Data Collection</div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="title">店铺采集</div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">店铺地址</label>
                                <input class="form-control" id="address" placeholder="Enter url"></input>
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
            if($("#address").val() != ''){
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:"{{url('/admin/doShopCollection')}}",
                    data:{'_token':'{{csrf_token()}}','content':$("#address").val()},
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
                layer.msg('店铺地址不能为空', {
                    icon: 2,
                    time: 2000
                });
                $("#address").focus();
                return false;
            }
        });
    </script>
@endsection
