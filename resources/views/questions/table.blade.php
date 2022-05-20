<div class="table-responsive">
    <table class="table" id="questions-table">
        <thead>
        <tr>
            <th>no</th>
            <th>Title</th>
            <th>Description</th>
            <th>User</th>
            <th>Question Type</th>
            <th>Language</th>
        </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
        @foreach($questions as $question)
            <tr>
                <td>{{ $i++; }}</td>
                <td>{{ $question->title }}</td>
                <td>{{ $question->description }}</td>
                <td>{{ $question->User->first_name }} {{ $question->User->last_name }}</td>
                <td>{{ $question->questionType->type }}</td>
                <td>{{ $question->language->language }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
