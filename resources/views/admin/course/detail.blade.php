@extends('admin.layouts.app')

@section('title')
{{$course->title}} - 课程管理
@endsection


@section('sidebar')
@include('admin.course.menu')
@endsection

@section('content')
@page_title(['title'=>'课程详情', 'comment'=>"当前课程为「{$course->title}」"])
<a href='{{route("admin.course.chapter.add", [$course->id])}}' class='btn btn-primary btn-sm'>添加章节</a>
@endpage_title

<div class='row  mt-2 mb-2'>
    <div class='col-12'>
        <div class='d-flex mb-2'>
            <h5 class='m-0 p-0'>(序号) 课程标题</h5>
            <small class="text-muted mr-auto pl-2 align-middle" style='margin:auto 0;'>
                课程简介
            </small>
            <a href='#' class='btn btn-primary btn-sm mb-1 mr-1'>编辑</a>
            <a href='#' class='btn btn-success btn-sm mb-1 mr-1'>资源</a>
            <a href='#' class='btn btn-danger btn-sm mb-1'>移除</a>
        </div>
    </div>
    <div class='col-12'>
        <table class="table table-sm">
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
        </table>
    </div>
</div>
<div class='row mt-2 mb-2'>
    <div class='col-12'>
        <div class='d-flex mb-2'>
            <h5 class='m-0 p-0'>(序号) 课程标题</h5>
            <small class="text-muted mr-auto pl-2 align-middle" style='margin:auto 0;'>
                课程简介
            </small>
            <a href='#' class='btn btn-primary btn-sm mb-1 mr-1'>编辑</a>
            <a href='#' class='btn btn-success btn-sm mb-1 mr-1'>资源</a>
            <a href='#' class='btn btn-danger btn-sm mb-1'>移除</a>
        </div>
    </div>
    <div class='col-12'>
        <table class="table table-sm">
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
        </table>
    </div>
</div>
<div class='row mt-2 mb-2'>
    <div class='col-12'>
        <div class='d-flex mb-2'>
            <h5 class='m-0 p-0'>(序号) 课程标题</h5>
            <small class="text-muted mr-auto pl-2 align-middle" style='margin:auto 0;'>
                课程简介
            </small>
            <a href='#' class='btn btn-primary btn-sm mb-1 mr-1'>编辑</a>
            <a href='#' class='btn btn-success btn-sm mb-1 mr-1'>资源</a>
            <a href='#' class='btn btn-danger btn-sm mb-1'>移除</a>
        </div>
    </div>
    <div class='col-12'>
        <table class="table table-sm">
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
            <tr>
                <th width='100'>资源ID</th>
                <th width='100'>资源类型</th>
                <td><a href="#">资源标题</a></td>
            </tr>
        </table>
    </div>
</div>
@endsection