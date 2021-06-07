<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Task</title>
        <style type="text/css">

            div.main_cintainer{
                margin: 10px 50px 10px 50px;
            }

            form.form-example {
                display: table;
            }

            div.form-example {
                display: table-row;
            }

            label, input {
                display: table-cell;
                margin-bottom: 10px;
            }

            label {
                padding-right: 10px;
            }

        </style>
    </head>
    <body>
        <div class="main_cintainer">
            <h1>Task {{$task->id}}</h1>

            <form method="" action="" class="form-example">
             @csrf             
                
                <input type="hidden" name="id" id="id"  value="{{$task->id}}" required>
                @csrf
                
                <div class="form-example">
                    <label for="Subject">Subject: </label>
                    <input type="text" name="Subject" id="Subject"  value="{{$task->Subject}}" required>
                </div>

                <div class="form-example">
                    <label for="Due_Date">Due_Date: </label>
                    <input type="text" name="Due_Date" id="Due_Date" value="{{$task->Due_Date}}" required>
                </div>
                
                <div class="form-example">
                    <label for="Created_Time">Created_Time: </label>
                    <input type="text" name="Created_Time" id="Created_Time" value="{{$task->Created_Time}}" required>
                </div>

                
                <h3>Contact </h3>
                <div class="form-example">
                    <label for="Name">Name: </label>
                    <input type="text" name="Name" id="Name" value="{{$task->Who_Id->name}}" required>
                </div>
                <div class="form-example">
                    <label for="Id">Id: </label>
                    <input type="text" name="Id" id="Id" value="{{$task->Who_Id->id}}" required>
                </div>
                
                <h3>Record </h3>
                <div class="form-example">
                    <label for="Name">Name: </label>
                    <input type="text" name="Name" id="Name" value="{{$task->What_Id->name}}" required>
                </div>
                <div class="form-example">
                    <label for="Id">Id: </label>
                    <input type="text" name="Id" id="Id" value="{{$task->What_Id->id}}" required>
                </div>
                
            </form>
           
        </div>
    </body>
</html>















