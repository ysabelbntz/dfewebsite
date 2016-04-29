<?php 

include("layout.php"); //this includes layout.php which contains the navbar and footer

?>
<h1 id="h1_input">INPUT PAYMENT</h1>
<h2 id="h2_input">Bernardo, Cathy</h2>

<div id="div_input">
<div class="table-responsive" id="input_table">
    <table class="table table-hover">
      <thead>
        <tr id="input_thead">
          <th colspan="2">Expected Payment as of April 1, 2016</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2" id="input_title">Principal</td>
        </tr>
        <tr>
          <td>Principal (Per Week)</td>
          <td id="money">750.00</td>
        </tr>
        <tr>
          <td>Weeks Late</td>
          <td id="money">1</td>
        </tr>
        <tr>
          <td>Total Interest</td>
          <td class="total" id="money">750.00</td>
        </tr>
        <tr>
          <td colspan="2" id="input_title">Interest</td>
        </tr>
        <tr>
          <td>Interest (Per Week)</td>
          <td id="money">125.00</td>
        </tr>
        <tr>
          <td>Weeks Late</td>
          <td id="money">2</td>
        </tr>
        <tr>
          <td>Total Interest</td>
          <td class="total" id="money">250.00</td>
        </tr>
        <tr>
          <td colspan="2" id="input_title">Penalty</td>
        </tr>
        <tr>
          <td>Penalty (Per Day)</td>
          <td id="money">25.00</td>
        </tr>
        <tr>
          <td>Weeks Late</td>
          <td id="money">9</td>
        </tr>
        <tr>
          <td>Total Interest</td>
          <td class="total" id="money">225.00</td>
        </tr>
        <tr class="total" id="input_title">
          <td>Total</td>
          <td id="money">1,225.00</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>

<form class="form-horizontal" role="form" id="form_input">
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="turn">Turn Date </label>
    <div class="col-sm-6">
    <div class="input-group date" data-provide="datepicker-inline" id="picker_case">
      <input type="text" class="form-control">
      <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
      </div>
     </div> 
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="class">Payment Type</label>
    <div class="col-sm-6" id="input_class"> 
      <select class="form-control form-control-inline" id="class">
      <option>Cash</option>
      <option>Check</option>
      <option>Collateral</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="check">Check Number </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="check" placeholder="Check Number" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="principal">Principal Paid </label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="principal" placeholder="Principal Paid">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="interest">Interest Paid </label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="interest" placeholder="Interest Paid">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-4" for="rate">Penalty Paid </label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="rate" placeholder="Penalty Paid">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-6 col-sm-6">
      <button type="submit" class="btn btn-default" id="add_button">Input</button>
      <button type="submit" class="btn btn-default" id="cancel" onClick="window.location=\'http://localhost:8080/addclient.php\';">Cancel </button>
    </div>
  </div>
</form>
</div>
