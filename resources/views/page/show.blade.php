<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>My view</title>
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
        
        <h1>Zoho CRM</h1>
        
        <ul>
            <li><a href="{{url('/')}}/page/leads">Leads</a></li>
            <li><a href="{{url('/')}}/page/contacts">Contacts</a></li>
            <li><a href="{{url('/')}}/page/accounts">Accounts</a></li>
            <li><a href="{{url('/')}}/page/deals">Deals</a></li>
            <li><a href="{{url('/')}}/page/tasks">Tasks</a></li>
            
            
            
        </ul>
        
    </body>
</html>















