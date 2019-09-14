                 <div id="comments" >
           @foreach ($comment as $val)
              
                <div class="comment-block">
                                <div class="user-img">
                                   <img src="../images/avatar_user.jpg" height="98" width="98" class="img-responsive" alt="user-img" />
                                </div><!-- end user-img -->

                                <div class="user-text">
                                    <ul class="list-inline list-unstyled">
                                        <li class="user-name">{{ $val->comment_name }}</li>
                                        <li class="date">{{ date('M d,Y', strtotime($val->date)) }}</li>
                                    </ul>
                                    <p>{{ $val->comment }}.</p>
                                    <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                </div><!-- end user-text -->

                            </div><!-- end comment-block -->
                             @endforeach
                             <div>