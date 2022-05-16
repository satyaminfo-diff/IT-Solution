<div class="table-responsive">
    <table class="table" id="questionTypes-table">
        <thead>
        <tr>
            <th>Type</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questionTypes as $questionType)
            <tr>
                <td>{{ $questionType->type }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['questionTypes.destroy', $questionType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('questionTypes.show', [$questionType->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('questionTypes.edit', [$questionType->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
