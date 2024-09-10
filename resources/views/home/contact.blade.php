@extends('layouts.frontbase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)
@section('icon', Storage::url($settings->icon))



@section('content')
    <div class="col-sm-9 padding-right">
       @include('home.messages')
        <form action="{{ route('storemessage') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td colspan="2">Contact Form</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td><input type="text" name="subject"></td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>
                        <textarea name="message" cols="20" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right"><button type="submit">Send</button></td>
                </tr>
            </table>
        </form>
        <hr>
        {!! $settings->contact !!}
    </div>

    </div>
    </div>

@endsection
