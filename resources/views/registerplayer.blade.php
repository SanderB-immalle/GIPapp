<form method="POST" action="/players">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>


    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>


    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary"> Register</button>
</form>