<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Tasks</title>
        <style type="text/css">
            thead,
            tfoot {
                background-color: #3f87a6;
                color: #fff;
            }

            tbody {
                background-color: #e4f0f5;
            }

            caption {
                padding: 10px;
                caption-side: top;
            }

            table {
                border-collapse: collapse;
                border: 2px solid rgb(200, 200, 200);
                letter-spacing: 1px;
                font-family: sans-serif;
                font-size: .8rem;
            }

            td,
            th {
                border: 1px solid rgb(190, 190, 190);
                padding: 5px 10px;
            }

            td {
                text-align: center;
            }
            li {
                list-style-type: circle;
            }

            li li {
                list-style-type: square;
            }

        </style>
    </head>
    <body>
        <h1>Zoho CRM Tasks</h1>

        <table>
            <caption>List of Tasks</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Accounts_Id</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Due_Date</th>                                      
                    <th scope="col">Created_Time</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="{{url('/')}}/page/task/{{$task->id}}">{{$task->id}}</a>                        
                    </td>
                    <td>{{$task->Subject}}</td>
                    <td>{{$task->Due_Date}}</td>                    
                    <td>{{$task->Created_Time}}</td>                                     
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>















