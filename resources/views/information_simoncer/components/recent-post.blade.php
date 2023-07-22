<div class="accordion left-accordion-box" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Recent Post
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body pt-0">
                <div class="recent-post-box">

                    {{-- preview: 4 recent post --}}
                    @foreach ($recent as $recent)
                        <div class="recent-box">
                            <a href="{{ route('simoncer-web.show', ['slug' => $recent->slug]) }}" class="recent-image">
                                <img src="{{ asset('uploads/simoncer/' . $recent->image) }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="recent-detail">
                                <a href="{{ route('simoncer-web.show', ['slug' => $recent->slug]) }}">
                                    <h5 class="recent-name">{{ $recent->title }}</h5>
                                </a>
                                <h6>{{ Str::limit($recent->created_at, 10, '') }} </h6>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                Category
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse collapse show"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body p-0">
                <div class="category-list-box">
                    <ul>
                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Latest Recipes</h5>
                                    <span>10</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Diet Food</h5>
                                    <span>6</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Low calorie Items</h5>
                                    <span>8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Cooking Method</h5>
                                    <span>9</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Dairy Free</h5>
                                    <span>12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="blog-list.html">
                                <div class="category-name">
                                    <h5>Vegetarian Food</h5>
                                    <span>10</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

</div>
