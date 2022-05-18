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
<div class="col-sm-12">
    {!! Form::label('aid', 'Answers:') !!}
    @foreach ( $question->Answer as $item )
    {{-- {{dd($item)}} --}}
    {{-- <p>{{ $item->answer}}</p> --}}
    <div class="card border-success mb-3" style="max-width: 50rem;">
        <div class="card-header">{{$item->User->FullName}}</div>
        <div class="card-body text-success">
          <p class="card-text">{{ $item->answer}}</p>
        </div>
    </div>
    @endforeach
    
   
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

