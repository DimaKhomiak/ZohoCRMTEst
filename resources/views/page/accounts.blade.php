<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Accounts</title>
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
        <h1>Zoho CRM Accounts</h1>

        <table>
            <caption>List of Leads</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Accounts_Id</th>
                    <th scope="col">Account_Name</th>
                    <th scope="col">Website</th>
                    <th scope="col">Employees</th>                    
                    <th scope="col">Created_Time</th>
                    <th scope="col">Modified_Time</th>                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($accounts as $account)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="{{url('/')}}/page/account/{{$account->id}}">{{$account->id}}</a>                        
                    </td>
                    <td>{{$account->Account_Name}}</td>
                    <td>{{$account->Website}}</td>
                    <td>{{$account->Employees}}</td>
                    <td>{{$account->Created_Time}}</td>
                    <td>{{$account->Modified_Time}}</td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>















