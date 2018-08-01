@extends('layouts.app')
@section('content') 
<div class="container"> 
<div class="row">
 <div class="col-md-12"> 
 <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a> </li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('books.index') }}">Buku</a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
                </ol>
            </nav>
 <div class="panel panel-default"> 
 <div class="panel-heading"> 
 <h2  class="panel-title">Tambah Buku</h2> </div>
<div  class="panel-body"> 
{!! Form::open(['url' => route('books.store'), 
'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!} 
@include('books._form')
 {!! Form::close() !!} 
 </div>
  </div> 
  </div>
   </div>
    </div>
     @endsection
