@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    @foreach ($employees as $employee)
        <h1>Employee Name: {{ $employee->fname }} {{$employee->lname}}</h1>
        <h2>Employee Department: {{ $employee->dept }}</h2>
        <h3>Employee Salary: {{ $employee->salary }}</h3>
    @endforeach
@endsection
