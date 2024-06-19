@extends('errors::azira')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Sorry, you are not allowed to access this resource. Please contact the administrator for further assistance.'))
