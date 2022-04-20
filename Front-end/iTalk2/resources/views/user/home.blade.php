@extends('layouts.app')


@section('content')
<div class="container">
    <div class="top-post">
        <div class="top-title">
            <h3>Most Liked Post</h3>
        </div>
        <div class="top-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>post title</h3>
                    </div>
                    <div class="card-text">
                        <p>post text</p>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-left">
                            <div class="card-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>post title</h3>
                    </div>
                    <div class="card-text">
                        <p>post text</p>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-left">
                            <div class="card-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>post title</h3>
                    </div>
                    <div class="card-text">
                        <p>post text</p>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-left">
                            <div class="card-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="main">
        <div class="main-category">
            <h3 class="text-center">Category</h3>
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select Category</option>
                <option value="javascript">JavaScript</option>
                <option value="python">Python</option>
                <option value="php">PHP</option>
                <option value="html">HTML</option>
            </select>
            <hr>
        </div>
        <div class="main-post">
            <div class="post">
                <div class="left">
                    <img src="" alt="profile">
                </div>
                <div class="right">
                    <div class="post-title">
                        <h3>post title</h3>
                    </div>
                    <div class="post-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aut iusto, possimus quas labore quae neque provident adipisci commodi, voluptatum laborum error? Possimus obcaecati ducimus nam assumenda a perferendis voluptates.</p>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-left">
                            <div class="post-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="left">
                    <img src="" alt="profile">
                </div>
                <div class="right">
                    <div class="post-title">
                        <h3>post title</h3>
                    </div>
                    <div class="post-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aut iusto, possimus quas labore quae neque provident adipisci commodi, voluptatum laborum error? Possimus obcaecati ducimus nam assumenda a perferendis voluptates.</p>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-left">
                            <div class="post-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="left">
                    <img src="" alt="profile">
                </div>
                <div class="right">
                    <div class="post-title">
                        <h3>post title</h3>
                    </div>
                    <div class="post-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aut iusto, possimus quas labore quae neque provident adipisci commodi, voluptatum laborum error? Possimus obcaecati ducimus nam assumenda a perferendis voluptates.</p>
                    </div>
                    <div class="post-footer">
                        <div class="post-footer-left">
                            <div class="post-footer-left-icon">
                                <i class="fas fa-heart">like</i>
                                <!-- <span>like</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection