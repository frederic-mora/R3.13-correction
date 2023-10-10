 <article class="product">
    <div class="product-image">
        <img src="{{image}}">
    </div>
    <div class="product-info">
        
            <h1 class="title">{{title}}</h1>
            <p class="description">
               {{description}}<br><br>
               <span>Sizes: {{sizes}}   </span>
            </p>
            
            <p>
                <span class="price">{{price}} €</span>
                <a href="index.php?action=buy&idproduct={{id}}">
                    <button class="buy-btn">Buy</button>
                </a>
            </p>
        
    </div>
</article>