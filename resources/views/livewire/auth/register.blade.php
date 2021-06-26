<div class="container" >
    <div class="row">
        <div class="col-md-6">
            <h4 style="color: green;">Registration Form</h4>
            <form wire:submit.prevent="register">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input wire:model.debounce.500ms="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input wire:model.lazy="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input wire:model.lazy="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="****">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password Confirmation</label>
                    <input wire:model.lazy="confirmPassword"  type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="****">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

    </div>

</div>
