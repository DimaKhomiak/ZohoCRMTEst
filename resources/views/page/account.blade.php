<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Account {{$account->id}}</title>
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
            <h1>Account {{$account->id}}</h1>


            <form method="" action="" class="form-example">
                @csrf             

                <input type="hidden" name="id" id="id"  value="{{$account->id}}" required>
                @csrf

                <div class="form-example">
                    <label for="Account_Name">Account_Name: </label>
                    <input type="text" name="Account_Name" id="Account_Name"  value="{{$account->Account_Name}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Website">Website: </label>
                    <input type="text" name="Website" id="Website" value="{{$account->Website}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Employees">Employees: </label>
                    <input type="text" name="Employees" id="Modified_Time" value="{{$account->Employees}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Created_Time">Created_Time: </label>
                    <input type="text" name="State" id="Created_Time" value="{{$account->Created_Time}}" disabled>
                </div>

                <div class="form-example">
                    <label for="Modified_Time">Modified_Time: </label>
                    <input type="text" name="Modified_Time" id="Description" value="{{$account->Modified_Time}}" disabled>
                </div>

            </form>


            <h2>Create Deal</h2>

            <form method="post" action="{{url('/')}}/page/create_deal/{{$account->id}}" class="form-example">
                @csrf  

                <div class="form-example">
                    <label for="Closing_Date">Closing_Date: </label>
                    <input type="text" name="Closing_Date" id="Closing_Date"  value="2021-08-16" required>
                </div>

                <div class="form-example">
                    <label for="Deal_Name">Deal_Name: </label>
                    <input type="text" name="Deal_Name" id="Deal_Name"  value="Grumman Corp Fan Deal" required>
                </div>

                <div class="form-example">
                    <label for="Expected_Revenue">Expected_Revenue: </label>
                    <input type="text" name="Expected_Revenue" id="Expected_Revenue"  value="50000" required>
                </div>

                <div class="form-example">
                    <label for="Stage">Stage: </label>
                    <input type="text" name="Stage" id="Stage"  value="Negotiation/Review" required>
                </div>

                <div class="form-example">
                    <label for="Amount">Amount: </label>
                    <input type="text" name="Amount" id="Amount"  value="50000" required>
                </div>
                
                 <div class="form-example">
                    <label for="Probability">Probability: </label>
                    <input type="text" name="Probability" id="Probability"  value="75" required>
                </div>
                
                <div class="form-example">
                    <input type="submit" value="Create Deal">
                </div>
                   

            </form>


        </div>
    </body>
</html>















