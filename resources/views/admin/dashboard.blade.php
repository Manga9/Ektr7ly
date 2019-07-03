@extends('admin.layouts.master')
@section('title', 'Admin|Dashboard')
@section('content')

<div class='content-wrapper'>
    <section class="content">
        <div class='container'>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('admins.index')}}" style="cursor:pointer; text-decoration:none; color: #333;">
                        <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Admins</span>
                        <span class="info-box-number">{{count($admins)}}</span>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('members.index')}}" style="cursor:pointer; text-decoration:none; color: #333;">
                        <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Members</span>
                        <span class="info-box-number">{{count($users)}}</span>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('categories.index')}}" style="cursor:pointer; text-decoration:none; color: #333;">

                    <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-pricetags"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Categories</span>
                        <span class="info-box-number">{{count($cats)}}</span>
                    </div>
                    </div>
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('movies.index')}}" style="cursor:pointer; text-decoration:none; color: #333;">

                    <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-film"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Movies</span>
                        <span class="info-box-number">{{count($movies)}}</span>
                    </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
