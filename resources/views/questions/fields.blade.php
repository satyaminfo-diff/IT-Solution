<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- question Type Field -->
<div class="form-group col-sm-6 ">
    
    {!! Form::label('questionType', 'Select Question Type :') !!} 
    <div>  
        
        <select class="form-control" name="questionType">
            <option value=''>Select here</option>
            @foreach($questionTypes as $qType)
            
            <option value='{{$qType->id}}'>{{$qType->type}}</option>
            @endforeach
        </select>
        {{-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </button>
       
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">  {{$qType->type}}</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
        --}}
    </div>  
</div>
<!-- Language Field -->
<div class="form-group col-sm-6 ">
    
    {!! Form::label('language', 'Select Language :') !!} 
    <div>  
        
        <select class="form-control" name="language">
            <option value=''>Select here</option>
            @foreach($languages as $language)
                <option value='{{$language->id}}'>{{$language->language}}</option>
            @endforeach
        </select>
    </div>  
</div>
