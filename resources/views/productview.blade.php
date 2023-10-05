

        @foreach($data as $data)

        <div class="product__item" style="display: inline-block; width: 330px; height: 500px; margin-left: 30px">
            <div class="product__item__pic set-bg" data-setbg="{{ asset('productimg/' . $data->image) }}">
                
                <ul class="product__hover">
                    <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">{{$data->name}}</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">{{$data->price}}</div>
            </div>
        </div>

        @endforeach

 
