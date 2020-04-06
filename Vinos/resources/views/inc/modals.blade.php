<!--users form-->
<div class="modal fade" id="newUsr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    
      <div class="modal-content">
        <form action="{{route('admin.user.store')}}" method="POST" class="register-form" id="userForm">
            @csrf <!--token that identyfies the petition for laravel-->
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New employee</h5>
            </div>        
            <div class="modal-body">          
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Username, Example: James Bond" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-id-card-alt color-red" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control" placeholder="email@example.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-at color-red" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="text" class="form-control" placeholder="secret shh your password here" aria-label="Recipient's username" aria-describedby="basic-addon2"
                    data-toggle="tooltip" data-placement="bottom" title="We recommend more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-key color-red" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="level" type="text" class="form-control" placeholder="Permissions, ex: administrator, employee..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-layer-group color-red" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="custom-file">
                        <input name="img" type="file" class="custom-file-input" id="img" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="img">Avatar...</label>
                    </div>
                </div>     
            </div>        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>        
      </div>
    </div>
</div>
<!--END users form-->