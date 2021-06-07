<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Zoho CRM Test</title>
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
            <h1>Zoho CRM Test</h1>



            <form method="post" action="{{url('/')}}/page/create_contact" class="form-example">
             @csrf             
                
                <input type="hidden" name="id" id="id"  value="{{$lead->id}}">
                @csrf
                
                <div class="form-example">
                    <label for="Company">Company: </label>
                    <input type="text" name="Company" id="Company"  value="{{$lead->Company}}" >
                </div>

                <div class="form-example">
                    <label for="Created_Time">Created_Time: </label>
                    <input type="text" name="Created_Time" id="Created_Time" value="{{$lead->Created_Time}}" >
                </div>
                
                <div class="form-example">
                    <label for="Modified_Time">Modified_Time: </label>
                    <input type="text" name="Modified_Time" id="Modified_Time" value="{{$lead->Modified_Time}}" >
                </div>

                <div class="form-example">
                    <label for="State">State: </label>
                    <input type="text" name="State" id="State" value="{{$lead->State}}" >
                </div>

                <div class="form-example">
                    <label for="Description">Description: </label>
                    <input type="text" name="Description" id="Description" value="{{$lead->Description}}" >
                </div>

                <div class="form-example">
                    <label for="First_Name">First_Name: </label>
                    <input type="text" name="First_Name" id="email" First_Name="{{$lead->First_Name}}" >
                </div>

                <div class="form-example">
                    <label for="Full_Name">Full_Name: </label>
                    <input type="text" name="Full_Name" id="Full_Name" value="{{$lead->Full_Name}}" required>
                </div>

                <div class="form-example">
                    <label for="Phone">Phone: </label>
                    <input type="text" name="Phone" id="Phone" value="{{$lead->Phone}}" >
                </div>

                <div class="form-example">
                    <label for="Last_Name">Last_Name: </label>
                    <input type="text" name="Last_Name" id="Last_Name" value="{{$lead->Last_Name}}" >
                </div>
                
                <div class="form-example">
                    <label for="email">Email: </label>
                    <input type="email" name="Email" id="Email" value="{{$lead->Email}}" required>
                </div>
                
                 <div class="form-example">
                    <label for="Skype_ID">Skype_ID: </label>
                    <input type="text" name="Skype_ID" id="Skype_ID" value="{{$lead->Skype_ID}}" >
                </div>
                
                 <div class="form-example">
                    <label for="Mobile">Mobile: </label>
                    <input type="text" name="Mobile" id="Mobile" value="{{$lead->Mobile}}" >
                </div>
                
                <div class="form-example">
                    <label for="Website">Website: </label>
                    <input type="text" name="Website" id="Website" value="{{$lead->Website}}" >
                </div>
                
                  <div class="form-example">
                    <label for="Industry">Industry: </label>
                    <input type="text" name="Industry" id="Industry" value="{{$lead->Mobile}}" >
                </div>
                
                 <div class="form-example">
                    <input type="submit" value="Add to Contact">
                </div>
                
            </form>
             
        </div>
    </body>
</html>















