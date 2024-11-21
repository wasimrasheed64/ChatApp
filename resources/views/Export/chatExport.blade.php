<style>
    th {
        white-space: nowrap;
    }

    .main-row-heading {
        text-align: left;
    }

    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
    }

    .no-border {
        background-color: lightgrey;
    }

    .no-border th {
        border: none;
    }
</style>
<div class="table-responsive">
    <table class="table">
        <thead style="background-color: lightgrey">
        <tr>
            <th>
                Sender
            </th>
            <th>
                Message
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($chatObject as $chat)
          <tr>
              <td>
                  {{$chat->user->id == 2 ? 'Bot' : $chat->user->name}}
              </td>
              <td>
                  {!! $chat->message !!}
              </td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>
