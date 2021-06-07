<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Leads</title>
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
        <h1>Zoho CRM Leads</h1>

        <table>
            <caption>List of Leads</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Lead_Id</th>
                    <th scope="col">Company</th>
                    <th scope="col">Last_Name</th>
                    <th scope="col">First_Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">State</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Created_Time</th>
                    <th scope="col">Description</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="{{url('/')}}/page/lead/{{$lead->id}}">{{$lead->id}}</a>                        
                    </td>
                    <td>{{$lead->Company}}</td>
                    <td>{{$lead->Last_Name}}</td>
                    <td>{{$lead->First_Name}}</td>
                    <td>{{$lead->Email}}</td>
                    <td>{{$lead->State}}</td>
                    <td>{{$lead->Phone}}</td>
                    <td>{{$lead->Created_Time}}</td>
                    <td>{{$lead->Description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>















