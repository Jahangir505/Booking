@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <div class="titleArea mt-5 text-left">
                <h1 class="subTitle">Contact</h1>
            </div>
            <div class="row">
                <div class="col-md-4 address">
                    @if($contact)
                        <address>
                            <strong>Email</strong>
                            <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                        </address>
                        <address>
                            <strong>Phone namber</strong>
                            {{$contact->phone}}
                        </address>
                        <address>
                            <strong>Address</strong>
                            {{$contact->address}}
                        </address>
                    @endif
                </div>
                <div class="col-md-8">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email id</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="" class="form-control" rows="5" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-orange btn-block">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="titleArea mt-5 text-left">
                <h1 class="subTitle">Location</h1>
            </div>
            <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119263355!2d-0.38178406930702025!3d51.52873519756608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1576230667437!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
@endsection