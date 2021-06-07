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
            <h1>Deal {{$deal->id}}</h1>



            <form method="" action="" class="form-example">
             @csrf             
                
                <input type="hidden" name="id" id="id"  value="{{$deal->id}}" required>
                @csrf
                
                <div class="form-example">
                    <label for="Description">Description: </label>
                    <input type="text" name="Description" id="Description"  value="{{$deal->Description}}" required>
                </div>

                <div class="form-example">
                    <label for="Closing_Date">Closing_Date: </label>
                    <input type="text" name="Closing_Date" id="Closing_Date" value="{{$deal->Closing_Date}}" required>
                </div>
                
                <div class="form-example">
                    <label for="Deal_Name">Deal_Name: </label>
                    <input type="text" name="Deal_Name" id="Deal_Name" value="{{$deal->Deal_Name}}" required>
                </div>

                <div class="form-example">
                    <label for="Expected_Revenue">Expected_Revenue: </label>
                    <input type="text" name="Expected_Revenue" id="Expected_Revenue" value="{{$deal->Expected_Revenue}}" required>
                </div>

                <div class="form-example">
                    <label for="Overall_Sales_Duration">Overall_Sales_Duration: </label>
                    <input type="text" name="Overall_Sales_Duration" id="Overall_Sales_Duration" value="{{$deal->Overall_Sales_Duration}}" required>
                </div>

                <div class="form-example">
                    <label for="Stage">Stage: </label>
                    <input type="text" name="Stage" id="Stage" value="{{$deal->Stage}}" required>
                </div>

                <div class="form-example">
                    <label for="Created_Time">Created_Time: </label>
                    <input type="text" name="Created_Time" id="Created_Time" value="{{$deal->Created_Time}}" required>
                </div>

                <div class="form-example">
                    <label for="Modified_Time">Modified_Time: </label>
                    <input type="text" name="Modified_Time" id="Modified_Time" value="{{$deal->Modified_Time}}" required>
                </div>

                <div class="form-example">
                    <label for="Amount">Amount: </label>
                    <input type="text" name="Amount" id="Amount" value="{{$deal->Amount}}" required>
                </div>
                
                <div class="form-example">
                    <label for="Probability">Probability: </label>
                    <input type="text" name="Probability" id="Probability" value="{{$deal->Probability}}" required>
                </div>
                
                 <div class="form-example">
                    <label for="Sales_Cycle_Duration">Sales_Cycle_Duration: </label>
                    <input type="text" name="Sales_Cycle_Duration" id="Sales_Cycle_Duration" value="{{$deal->Sales_Cycle_Duration}}" >
                </div>
            </form>
            
            
            <h2>Add Task</h2>
            
            <form method="post" action="{{url('/')}}/page/create_task" class="form-example">
             @csrf 
             
             <div class="form-example">
                 <label for="Subject">Subject: </label>
                 <input type="text" name="Subject" id="Subject" value="Call" >
             </div>

             <div class="form-example">
                 <label for="Due_Date">Due_Date : </label>
                 <input type="text" name="Due_Date" id="Due_Date" value="2021-07-12" >
             </div>

             <div class="form-example">
                 <label for="Status">Status: </label>
                 <input type="text" name="Status" id="Status" value="Deferred" >
             </div>
             
             <div class="form-example">
                 <label for="Who_Id">Contact_Id: </label>
                 <input type="text" name="Who_Id" id="Who_Id" value="" required>
             </div>
             
             <div class="form-example">
                 <label for="$se_module">$se_module: </label>
                 <input type="text" name="$se_module" id="\$se_module" value="Deals">
             </div>
             
             <div class="form-example">
                 <label for="What_Id">Deal_Id: </label>
                 <input type="text" name="What_Id" id="What_Id" value="{{$deal->id}}">
             </div>
             
              <div class="form-example">
                    <input type="submit" value="Add Task">
               </div>
             
            </form>
                  
        </div>
    </body>
</html>















