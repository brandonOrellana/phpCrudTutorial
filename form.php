<div class="modal fade" id="usermodal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Users</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addForm" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Username -->
                            <div class="form-group">
                                <label>Name:</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-dark">
                                        <i class="fa-solid fa-user text-light"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter your username"
                                        autocomplete="off" aria-describedby="addon-wrapping" required="required"
                                        id="username" name="username">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label>Email:</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-dark">
                                    <i class="fa-solid fa-envelope text-light"></i>
                                    </span>
                                    <input type="email" class="form-control" placeholder="Enter your email"
                                        autocomplete="off" aria-describedby="addon-wrapping" required="required"
                                        id="email" name="email">
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="form-group">
                                <label>Mobile:</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-dark">
                                    <i class="fa-solid fa-phone text-light"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter your mobile"
                                        autocomplete="off" aria-describedby="addon-wrapping" required="required"
                                        id="mobile" name="mobile" maxlength="10" minlength="10">
                                </div>
                            </div>

                            <!-- Photo -->
                            <div class="form-group">
                                <label>Photo:</label>
                                <div class="input-group flex-nowrap">
                                    <input type="file" class="form-control" name="photo" id="userphoto">
                                    <label class="input-group-text" for="userphoto">Choose File</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Submit</button>
                            <!-- 2 input fields firsdt for adding and next for update,delete or viewing profile-->
                        </div>
                    </form>
                </div>
            </div>
        </div>