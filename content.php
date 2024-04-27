<style>
.left-side {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 100px;
}

.left-side img {
    margin-top: 5px; 
}

.container {
  width: 100%;
}

.center {
    margin-left: -5%;
}

.author, .rating, .topics {
    margin-left: -5%;
}

.author img, .author span {
    vertical-align: middle;
}

.author span {
    font-size: 14px;
    margin-right: 5px; 
}

.author button {
    font-size: 14px; 
    padding: 5px 10px;
}

.rating u {
        font-size: 16px;
        text-decoration: underline;
        text-decoration-color: #E5B64C;
        line-height: 3px;
}

.rating span {
    color: black; 
    margin-left: 5%;
}

.topics_button {
    color: blue; 
    background-color: white; 
    border: 2px solid #ECECEC; 
    border-radius: 12px;
}
</style>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="left-side d-flex flex-column align-items-center">
                <p class="mb-0">SHARE:</p>
                <img src="Images/social_media/facebook.png" alt="Facebook"/>
                <img src="Images/social_media/twitter.png" alt="Twitter"/>
                <img src="Images/social_media/whatsapp.png" alt="WhatsApp"/>
                <img src="Images/social_media/pinterest.png" alt="Pinterest"/>
                <img src="Images/social_media/link.png" alt="Link"/>
            </div>
        </div>
        <div class="col-md-7">
            <div class="center">
                <h2>Gnocchi with Roasted Red Pepper Sauce Recipe</h2>
            </div>
            <div class="author">
                <img src="Images/content/Kelly.png"><span style="color: black"> Kelly Tillotsdfdfon</span>
                <span style="color: #808080;"> Modified & Updated: Feb 26, 2024 | Reviewed by</span>
                <img src="Images/content/Kenny.png"><span style="color: black"> Kenny lannottiu </span>
                <button class="btn btn-primary">Jump To Recipe</button>
                <button class="btn btn-danger"><img src="Images/content/pin.png" alt="Pinterest"> Pinterest</button>
            </div>
            <div style="height: 10px;"></div>
            <div class="rating">
                <img src="Images/content/rating.png"><span style="color: black"> <u> 4.7 (24) </u> </span>
                <span> <u> 38 Reviews </u></span>
                <span> <u> 26 Photos </u></span>
            </div>
            <div style="height: 10px;"></div>
            <div class="topics">
                <span style="color: black">Topics: </span>
                    <button class="topics_button">Cake Recipes</button>
                    <button class="topics_button">Tiramisu Recipes</button>
                    <button class="topics_button">Berry Cakes</button>
                    <button style="color: #ECECEC; background-color: #074880; border: 2px solid #ECECEC; border-radius: 12px;">Lemon Cake</button>
                    <button class="topics_button">Apple Cake</button>
                    <button class="topics_button">Majui Cake</button>
                    <button class="topics_button">Quick Cake Recipes</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="right-side">
                <img src="Images/content/ads.png">
            </div>
        </div>
    </div>
</div>
