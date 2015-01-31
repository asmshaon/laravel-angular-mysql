@section('content')

<div ng-controller="cardController">
    <% Form::open(['route'=>'cards.store', "ng-submit" => "submit()", 'method'=>'post', 'class'=>'form-horizontal', 'id'=>'form', 'name' => 'form']) %>
        <fieldset>
          <legend>Add New Credit Card</legend>
          
          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">First Name</label>
              <div class="col-sm-9">
              <% Form::text('first_name', '', array( 'ng-model'=> 'first_name', 'required', 'class'=>'form-control', 'id'=>'first_name', 'placeholder' => 'First Name')) %>
                  @if ($errors->has('first_name'))
                      @foreach ($errors->get('first_name', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
                  <span class="l4-form-error" ng-show="hasError('first_name', 'required')">First Name is required</span>
              </div>

          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">Last Name</label>
              <div class="col-sm-9">
              <% Form::text('last_name', '', array('ng-model'=> 'last_name', 'required', 'class'=>'form-control', 'id'=>'last_name', 'placeholder' => 'Last Name')) %>
                  @if ($errors->has('last_name'))
                      @foreach ($errors->get('last_name', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
                  <span class="l4-form-error" ng-show="hasError('last_name', 'required')">First Name is required</span>
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">Address</label>
              <div class="col-sm-9">
              <% Form::text('address', '', array('class'=>'form-control', 'id'=>'address', 'placeholder' => 'Address')) %>
                  @if ($errors->has('address'))
                      @foreach ($errors->get('address', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">Post Code</label>
              <div class="col-sm-9">
              <% Form::text('post_code', '', array('ng-minlength' => 4, 'class'=>'form-control', 'id'=>'post_code', 'placeholder' => 'Post Code')) %>
                  @if ($errors->has('post_code'))
                      @foreach ($errors->get('post_code', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">State</label>
              <div class="col-sm-9">
              <% Form::select('state', array('ACT' => 'ACT', 'NSW' => 'NSW', 'NT' => 'NT', 'QLD' => 'QLD', 'SA' => 'SA', 'TAS' => 'TAS', 'VIC' => 'VIC'), 'ACT', array('class'=>'form-control', 'id'=>'state', 'placeholder' => 'Address')) %>
                  @if ($errors->has('state'))
                      @foreach ($errors->get('address', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="card-holder-name">Card Number</label>
              <div class="col-sm-9">
              <% Form::text('card_number', '', array('class'=>'form-control', 'id'=>'card_number', 'placeholder' => 'Card Number')) %>
                  @if ($errors->has('card_number'))
                      @foreach ($errors->get('card_number', '<p class="l4-form-error">:message</p>') as $name_error)
                      <% $name_error %>
                      @endforeach
                  @endif
              </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="expire_month">Expiration Date</label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-xs-3">
                  <select class="form-control col-sm-2" name="expire_month" id="expire_month">
                    <option value="01">Jan (01)</option>
                    <option value="02">Feb (02)</option>
                    <option value="03">Mar (03)</option>
                    <option value="04">Apr (04)</option>
                    <option value="05">May (05)</option>
                    <option value="06">June (06)</option>
                    <option value="07">July (07)</option>
                    <option value="08">Aug (08)</option>
                    <option value="09">Sep (09)</option>
                    <option value="10" selected>Oct (10)</option>
                    <option value="11">Nov (11)</option>
                    <option value="12">Dec (12)</option>
                  </select>
                </div>
                <div class="col-xs-3">
                  <select class="form-control" name="expire_year">
                    <option value="15">2015</option>
                    <option value="16">2016</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                    <option value="24">2024</option>
                    <option value="25">2025</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <% Form::button('Add Now', array( 'ng-disabled' =>
              "form.first_name.\$dirty && form.first_name.\$invalid ||
              form.last_name.\$dirty && form.last_name.\$invalid",
              'type' => 'submit', 'class'=>"btn btn-default")) %>
            </div>
          </div>
        </fieldset>
    <% Form::close() %>
</div>
@stop
