<!DOCTYPE html>
<html lang="en">
<head>
    <title>DataTable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Vertical (basic) form</h2>
    <form class="p-4" action="{{ url('note/store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="note">Note:</label>
            <input type="text" class="form-control" id="note" placeholder="Enter note" name="note">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea required class="form-control" id="message" placeholder="Enter text" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <div style="margin-top: 80px;">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Note</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notesdata as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->note }}</td>
                        <td>{{ $data->message }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        var table = $('#myTable').DataTable();
    });
</script>
</body>
</html>