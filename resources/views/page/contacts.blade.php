<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Contacts</title>
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
        <h1>Zoho CRM Contacts</h1>

        <table>
            <caption>List of Contacts</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Accounts_Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mailing_State</th>
                    <th scope="col">Description</th>                    
                    <th scope="col">Full_Name</th>
                    <th scope="col">Phone</th>                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <a href="{{url('/')}}/page/contact/{{$contact->id}}">{{$contact->id}}</a>                        
                    </td>
                    <td>{{$contact->Email}}</td>
                    <td>{{$contact->Mailing_State}}</td>
                    <td>{{$contact->Description}}</td>
                    <td>{{$contact->Full_Name}}</td>
                    <td>{{$contact->Phone}}</td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>















