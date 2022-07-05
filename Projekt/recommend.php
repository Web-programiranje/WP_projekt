<?php
    include_once "header.php"
?>
     
    <main>
        <div class="recommendation-form">
            <h2>ADD RECOMMENDATION</h2>
            <form action="includes/recommend.include.php" method="post">
                <div class="form-group mb-3">
                    <label for="csname" class="form-label">COFFEE SHOP NAME</label>
                    <input type="text" class="form-control" name ="rname">
            
                </div>
                <div class="form-group mb-3">
                    <label for="city" class="form-label">LOCATION</label>
                    <input type="text" class="form-control" name="location">
                </div>
                <div class="form-group mb-3">
                    <label for="review" class="form-label">REVIEW</label>
                    <textarea class="form-control" placeholder="Leave a review here" style="height: 100px" name="review"></textarea> 
                </div>
                <div class="form-group mb-3">
                    <label for="imageUrl" class="form-label">IMAGE URL</label>
                    <input type="text" class="form-control" name="image">
                </div>   
                <button type="submit" name="submit" class="btn btn-outline-dark">ADD RECOMMENDATION</button>
                                 
            </form>
        </div>
    </main>
    
<?php
    include_once "footer.php"
?>