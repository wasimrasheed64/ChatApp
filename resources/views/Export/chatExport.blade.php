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
        <tr>
            <th style="font-weight: bolder;border:2px solid #000;">Project Managers</th>
            @foreach($projectManagerObject as $projectManager)
                <th style="text-align: center; font-weight: bolder;color: #cc0000;border:2px solid #000;">
                    {{$projectManager['projectManagerName']}}
                </th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($chatObject as $chat)
          <tr>
              <td>
                  {{$chat->user->id == 2 ? 'Bot' : $message->user->name}}
              </td>
              <td>
                  {!! $chat->message !!}
              </td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>
