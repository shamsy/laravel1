@extends("layout")
@section("content")
  <p>Welcome to the ultimate calculator.</p>
  <p>* Required</p>
  {{ $errors->first("arg1") }}<br />
  {{ $errors->first("operator") }}<br />
  {{ $errors->first("arg2") }}<br />
  {{ Form::open() }} 
    {{ Form::label("arg1", "Argument 1*") }}
    {{ Form::text("arg1", Input::old("arg1")) }}<br />
    {{ Form::label("operator", "Operator*") }}
    {{ Form::select('operator', array('+' => '+','-' => '-','*' => '*','/' => '/'), null, array('style' => 'float:left; clear:both')) }}<br />
    {{ Form::label("arg2", "Argument 2*") }}<br />
    {{ Form::text("arg2", Input::old("arg2")) }}<br />
    {{ Form::submit("Calculate") }}<br />
  {{ Form::close() }}
  <div style="float:left; clear:both">Result:{{ Session::get('result') }}</p>
@stop


