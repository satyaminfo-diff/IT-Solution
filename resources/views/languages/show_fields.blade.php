<!-- Language Field -->
<div class="col-sm-12">
    {!! Form::label('language', 'Language:') !!}
    <p>{{ $language->language }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $language->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $language->updated_at }}</p>
</div>

