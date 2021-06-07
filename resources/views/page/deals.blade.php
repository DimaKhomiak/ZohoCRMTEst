<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Test</title>
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
        <h1>Zoho CRM Test</h1>

        <table>
            <caption>List of Leads</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Deal_Id</th>
                    <th scope="col">Deal_Name</th>
                    <th scope="col">Closing_Date</th>
                    <th scope="col">Expected_Revenue</th>
                    <th scope="col">Overall_Sales_Duration</th>
                    <th scope="col">Stage</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Probability</th>
                    <th scope="col">Sales_Cycle_Duration</th>
                    <th scope="col">Created_Time</th>
                    <th scope="col">Modified_Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($deals as $deal)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="{{url('/')}}/page/deal/{{$deal->id}}">{{$deal->id}}</a>                        
                    </td>
                    <td>{{$deal->Deal_Name}}</td>
                    <td>{{$deal->Closing_Date}}</td>
                    <td>{{$deal->Expected_Revenue}}</td>
                    <td>{{$deal->Overall_Sales_Duration}}</td>
                    <td>{{$deal->Stage}}</td>
                    <td>{{$deal->Amount}}</td>
                    <td>{{$deal->Probability}}</td>
                    <td>{{$deal->Sales_Cycle_Duration}}</td>
                    <td>{{$deal->Created_Time}}</td>
                    <td>{{$deal->Modified_Time}}</td>
                     
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>















