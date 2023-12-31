<?php
       include('../connection.php');
       include('header.php');
        ?>
<style>
.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #28a745;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}


.btn {
  background-color: #004085;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-weight: bold;
  border-radius: 500px;
}

.btn:hover {
  opacity: 1;
}

</style>

<body>

        <div id="page-wrapper">

             <div class="col-lg-12">
                  <h2>Add New User</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="add1.php?action=add">
                            <div class="input-container">
                              <i class="fa fa-user icon"></i>
                            <input class="form-control" placeholder="name" name="name" required>
                            </div><div class="input-container">
                             <i class="fa fa-mobile icon"></i>

                            <input class="form-control" placeholder="mobile" name="mobile" required>
                            </div> <div class="input-container">
                             <i class="fa fa-envelope icon"></i>
                            <input class="form-control" placeholder="email" name="email" required>
                            </div><div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="form-control" placeholder="password" name="password" required>
                            </div>
                            <div class="input-container">
                           <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>
                            </div>
                      </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

