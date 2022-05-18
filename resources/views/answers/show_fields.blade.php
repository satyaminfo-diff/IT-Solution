<!-- Answer Field -->
<div class="col-sm-12">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{{ $answer->answer }}</p>
</div>

<!-- Qid Field -->
<div class="col-sm-12">
    {!! Form::label('qid', 'Qid:') !!}
    <p>{{ $answer->qid }}</p>
</div>

<!-- Uid Field -->
<div class="col-sm-12">
    {!! Form::label('uid', 'Uid:') !!}
    <p>{{ $answer->uid }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $answer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $answer->updated_at }}</p>
</div>

