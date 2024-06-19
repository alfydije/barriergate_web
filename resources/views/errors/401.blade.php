@extends('errors::azira')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Sorry, access denied. You do not have valid authorization to access this page.'))
