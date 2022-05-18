<div class="table-responsive">
    <table class="table" id="answers-table">
        <thead>
        <tr>
            <th>Answer</th>
        <th>Qid</th>
        <th>Uid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($answers as $answer)
            <tr>
                <td>{{ $answer->answer }}</td>
            <td>{{ $answer->qid }}</td>
            <td>{{ $answer->uid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('answers.show', [$answer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('answers.edit', [$answer->id]) }}"
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
