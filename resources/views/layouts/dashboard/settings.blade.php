<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 28-Oct-16
 * Time: 10:27 PM
 */
?>

@extends('layouts/dashboard.master')
@section('title','Settings')
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Settings</h3>
            <ol class="breadcrumb">
                <li><a href="../admin.php">Home</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Easy Site Settings API</h3>
            </div>
            <div class="card-block">
                <p>provides easy way to store and retrieve your Site Settings</p>
                <p><code>Setting::setSetting('key','value')</code></p>
                <p><code>Setting::getSetting('key')</code></p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Example</h3>
            </div>
            <div class="card-block">
                <form action=".php" method="post">
                    <input type="hidden" name="_token" value="rPQsDEzdgkRUwlxjHFTpiIIyqrAmhDyVXbvan2Ee">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Facebook Page URL</label>
                            <div class="col-md-10">
                                <div class="input-icon">
                                    <i class="fa fa-facebook"></i>
                                    <input type="text" class="form-control" name="facebook" value="http://facebook.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Google Plus URL</label>
                            <div class="col-md-10">
                                <div class="input-icon">
                                    <i class="fa fa-google-plus"></i>
                                    <input type="text" class="form-control" name="google" value="http://plus.google.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Twitter URL</label>
                            <div class="col-md-10">
                                <div class="input-icon">
                                    <i class="fa fa-twitter"></i>
                                    <input type="text" class="form-control" name="twitter" value="http://twitter.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
