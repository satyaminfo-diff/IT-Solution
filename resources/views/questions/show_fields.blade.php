<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $question->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $question->description }}</p>
</div>

<!-- Tid Field -->
<div class="col-sm-12">
    {!! Form::label('tid', 'Question type:') !!}
    <p>{{ $question->questionType->type }}</p>
    {{-- <p>{{ $question->QType }}</p> --}}
</div>
<div class="col-sm-12">
    {!! Form::label('tid', 'Language type:') !!}
    <p>{{ $question->language->language }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('uid', 'user Name:') !!}
    <p>{{ $question->User->first_name }} {{ $question->User->last_name }} </p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $question->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $question->updated_at }}</p>
</div>

