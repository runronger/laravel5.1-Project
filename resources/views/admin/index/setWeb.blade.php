@extends('layouts.base')

@section('title','网站设置')
@section('keywords','网站后台设置')
@section('description','网站设置描述')
@section('page','网站设置')

@section('content')
    <div class="side-body">

        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">网站seo设置</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="sub-title">网站地址</div>
                        <div>
                            <input type="text" class="form-control" placeholder="Text input">
                        </div>
                        <div class="sub-title">网站关键字</div>
                        <div>
                            <input type="text" class="form-control" placeholder="Text input">
                        </div>
                        <div class="sub-title">网站描述</div>
                        <div>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">保存</button>
                        <button type="submit" class="btn btn-primary">取消</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">管理员设置</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">邮箱</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">头像</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <button type="submit" class="btn btn-info">保存</button>
                            <button type="submit" class="btn btn-primary">取消</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">API配置</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="exampleInputName2">Name</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Token</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="token">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Key</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="key">
                            </div>
                            <button type="submit" class="btn btn-info">保存</button>
                            <button type="submit" class="btn btn-primary">删除</button>
                        </form>

                        <form class="form-inline">
                            <div class="form-group">
                                <label for="exampleInputName2">Name</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Token</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="token">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Key</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="key">
                            </div>
                            <button type="submit" class="btn btn-info">保存</button>
                            <button type="submit" class="btn btn-primary">删除</button>
                        </form>

                        <form class="form-inline">
                            <div class="form-group">
                                <label for="exampleInputName2">Name</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Token</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="token">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Key</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="key">
                            </div>
                            <button type="submit" class="btn btn-info">保存</button>
                            <button type="submit" class="btn btn-primary">删除</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
