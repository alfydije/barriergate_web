@extends('errors::azira')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Sorry, you have exceeded the limit of requests. Please try again later.'))
