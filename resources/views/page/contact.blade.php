<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Account {{$contact->id}}</title>
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
            <h1>Contact {{$contact->id}}</h1>


            <form method="" action="" class="form-example">
                @csrf             

                <input type="hidden" name="id" id="id"  value="{{$contact->id}}" required>
                @csrf

                <div class="form-example">
                    <label for="Email">Email: </label>
                    <input type="text" name="Email" id="Email"  value="{{$contact->Email}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Mailing_State">Mailing_State: </label>
                    <input type="text" name="Mailing_State" id="Mailing_State" value="{{$contact->Mailing_State}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Last_Activity_Time">Last_Activity_Time: </label>
                    <input type="text" name="Last_Activity_Time" id="Last_Activity_Time" value="{{$contact->Last_Activity_Time}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Created_Time">Created_Time: </label>
                    <input type="text" name="State" id="Created_Time" value="{{$contact->Created_Time}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Full_Name">Modified_Time: </label>
                    <input type="text" name="Full_Name" id="Full_Name" value="{{$contact->Full_Name}}" disabled>
                </div>

            </form>


        </div>
    </body>
</html>















