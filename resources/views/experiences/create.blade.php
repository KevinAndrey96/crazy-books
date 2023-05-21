

                        <form action="{{ route('evidences.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="attachment_media">Attachment</label>
                                <input type="file" class="form-control-file" id="attachment_media" name="attachment_media">
                            </div>

                            <div class="form-group">
                                <label for="user_id">User ID</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div>

                            <div class="form-group">
                                <label for="student_name">Student Name</label>
                                <input type="text" class="form-control" id="student_name" name="student_name">
                            </div>

                            <div class="form-group">
                                <label for="class_room">Class Room</label>
                                <input type="text" class="form-control" id="class_room" name="class_room">
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    

