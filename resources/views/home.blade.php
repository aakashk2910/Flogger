
@extends('layouts.app')

@section('content')

    <?php

    $filedoc = DB::table('fileentries')->where('type', 'doc')->get();
    $fileimg = DB::table('fileentries')->where('type', 'img')->get();
    $filemedia = DB::table('fileentries')->where('type', 'media')->get();
    $filesdoc = DB::table('fileentries')->where('type', 'sdoc')->get();
    $filesimg = DB::table('fileentries')->where('type', 'simg')->get();
    $filesmedia = DB::table('fileentries')->where('type', 'smedia')->get();
    $files = DB::table('fileentries')->whereIn('type', ['sdoc', 'simg', 'smedia'])->get();

    ?>

    <div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div class="container"><h4>  </h4></div>
                    <div id="exTab1" class="container">
                        <ul  class="nav nav-pills">
                            <li class="active">
                                <a  href="#1a" data-toggle="tab">Documents</a>
                            </li>
                            <li><a href="#2a" data-toggle="tab">Images</a>
                            </li>
                            <li><a href="#3a" data-toggle="tab">Media</a>
                            </li>
                            <li><a href="#4a" data-toggle="tab">Shared Documents</a>
                            </li>
                            <li><a href="#5a" data-toggle="tab">Shared Images</a>
                            </li>
                            <li><a href="#6a" data-toggle="tab">Shared Media</a>
                            </li>
                            <li><a href="#7a" data-toggle="tab">Profile</a>
                            </li>
                            <li><a href="#8a" data-toggle="tab">Log files</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <h3>Documents</h3>
                                <div class="content">

                                    @foreach($filedoc as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploaddoc',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill  ">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="2a">
                                <h3>Images</h3>
                                <div class="content">

                                    @foreach($fileimg as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploadimg',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill  ">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="3a">
                                <h3>Media</h3>
                                <div class="content">

                                    @foreach($filemedia as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploadmedia',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill  ">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="4a">
                                <h3>Shared Documents</h3>
                                <div class="content">

                                    @foreach($filesdoc as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploadsdoc',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill  ">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="5a">
                                <h3>Shared Images</h3>
                                <div class="content">

                                    @foreach($filesimg as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploadsimg',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="6a">
                                <h3>Shared Media</h3>
                                <div class="content">

                                    @foreach($filesmedia as $f)

                                        <a href="/download/{!! $f->filename !!}"><h4>{!! $f->originalfilename !!}</h4></a>

                                    @endforeach


                                    {!! Form::open(
                                           array(
                                               'url' => '/uploadsmedia',
                                               'class' => 'form',
                                               'novalidate' => 'novalidate',
                                               'files' => true)) !!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::file('image', null) !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill  ">Update Profile</button>
                                    </div>

                                    <div class="clearfix"></div>
                                    {!! Form::close() !!}
                                </div>

                            </div>
                            <div class="tab-pane" id="7a">
                                <h3>Profile</h3>

                                <h4><b>ID      : </b>{!! @Auth::user()->id !!}</h4>
                                <h4><b>Name    : </b>{!! @Auth::user()->name !!}</h4>
                                <h4><b>Email   : </b>{!! @Auth::user()->email !!}</h4>

                            </div>
                            <div class="tab-pane" id="8a">
                                <h3>Log files</h3>
                                @foreach($files as $f)
                                    <table>
                                        <tr>
                                            <th>File Name</th>
                                            <th>Owner</th>
                                            <th>Filetype</th>
                                            <th>Created At</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $f->originalfilename !!}</td>
                                            <td>{!! DB::table('users')->where('id', $f->userid)->value('name') !!}</td>
                                            <td>{!! $f->mime !!}</td>
                                            <td>{!! $f->created_at !!}</td>
                                        </tr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
