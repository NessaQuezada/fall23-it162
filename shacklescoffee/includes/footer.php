</div>
        <footer>
            <div class="social-container">
                <div> <a href="https://www.facebook.com/" class="fa fa-facebook"> </a> </div>
                <div> <a href="https://twitter.com/xShacklesx" class="fa fa-twitter"> </a> </div>
                <div> <a href="https://www.youtube.com/" class="fa fa-youtube"> </a> </div> 
                <div> <a href="https://www.instagram.com/"  class="fa fa-instagram" >  </a> </div> 
            </div>
            
            <p><small>&copy; 2023 - <?=date('y')?>
                <a href="contact.php">Shackles</a>, All Rights Reserved ~ 
                <a id="html-checker" href="#">Check HTML</a> ~ 
                <a id="css-checker" href="#">Check CSS</a></small>
            </p>    
        </footer>
     </div>  

     <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
     <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
     </script>

</body>
</html>